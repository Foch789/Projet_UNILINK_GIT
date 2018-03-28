<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Niveau_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("niveau", array("niveau" => "niveau","id_etu" => "id_etu", "id_comp" => "id_comp"));
    }

    public function get_etudiant_niveau($id)
    {
        $this->db->select('id_comp');
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['id_etu'], $id);
        $resultat = $this->db->get();

        return $resultat->row_array();
    }
    //Recherche avec le et
    public function get_niveau_etudiant_sup_et($id = array()) //sup
    {
        $copie = array();
        if (!empty($id)) {
            $this->db->select('id_etu');
            $this->db->from($this->get_table());
            $this->db->where($this->get_colonne()['id_comp'], $id[0]);
            $this->db->where($this->get_colonne()['niveau'].'>', 3);
            $st = $this->db->get();
            $so = $st->result_array();
            foreach ($so as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    array_push($copie, $value1);
                }
            }

            unset($id[0]);

            foreach ($id as $value) {
                $compare = array();
                $this->db->select('id_etu');
                $this->db->from($this->get_table());
                $this->db->where($this->get_colonne()['id_comp'], $value);
                $this->db->where($this->get_colonne()['niveau'].'>', 3);
                $st = $this->db->get();
                $so = $st->result_array();
                foreach ($so as $key1 => $value1) {
                    foreach ($value1 as $key2 => $value2) {
                        array_push($compare, $value2);
                    }
                }
                foreach ($copie as $key => $value) {
                    if (!in_array($value, $compare)) {
                        unset($copie[$key]);
                    }
                }
                unset($compare);
            }
        }
        return $copie;
    }

    //Recherhce avec le ou
    public function get_niveau_etudiant_sup($id = array()) //sup
    {
        $resultat = array();
        foreach ($id as $value) {
            $this->db->select('id_etu');
            $this->db->from($this->get_table());
            $this->db->where($this->get_colonne()['id_comp'], $value);
            $this->db->where($this->get_colonne()['niveau'].'>', 3);
            $st = $this->db->get();
            $so = $st->result_array();
            foreach ($so as $key1 => $value1) {
                foreach ($value1 as $key2 => $value2) {
                    array_push($resultat, $value2);
                }
            }
        }

        $fin =  array_unique($resultat);

        return $fin;
    }

    public function get_niveau_etudiant_inf($id = array()) //inf
    {
        $resultat = array();
        foreach ($id as $key => $value) {
            $this->db->select('id_etu');
            $this->db->from($this->get_table());
            $this->db->where($this->get_colonne()['id_comp'], $value);
            $this->db->where($this->get_colonne()['niveau'].'<', 3);
            $st = $this->db->get();
            $so = $st->result_array();
            foreach ($so as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    array_push($resultat, $value1);
                }
            }
        }

        $fin =  array_unique($resultat);

        return $fin;
    }


    public function get_compt_etu($id)
    {
        $this->load->model('Competence_model');

        $tab1 = array();
        $this->db->select('niveau.id_comp,intitule_comp,niveau');
        $this->db->from($this->get_table());
        $this->db->join('competence', 'niveau.id_comp = competence.id_comp');
        $this->db->where($this->get_colonne()['id_etu'], $id);
        $idComp = $this->db->get();
        $active = $idComp->result_array();

        foreach ($active as $key => $value) {
            array_push($tab1, $value);
        }

        return $tab1;
    }

    public function get_comp_etu_non($id, $id_promo)
    {
        $this->load->model('Competence_model');
        $resultat = array();

        $tab1 = array();
        $tab2 = array();

        $this->db->select('id_comp');
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['id_etu'], $id);
        $idComp = $this->db->get();
        $active = $idComp->result_array();

        foreach ($active as $key => $value) {
            foreach ($value as $key1) {
                array_push($tab1, $key1);
            }
        }

        $this->db->select('id_comp');
        $this->db->from($this->Competence_model->get_table());
        $this->db->where('id_promo', $id_promo);
        $a = $this->db->get();
        $all = $a->result_array();

        foreach ($all as $key => $value) {
            foreach ($value as $key1) {
                array_push($tab2, $key1);
            }
        }


        $non_active = array_diff($tab2, $tab1);

        return $non_active;
    }

    public function mise_a_jour_niveau($idE, $idcomp, $niv)
    {
        $this->db->set('niveau', $niv);
        $this->db->where('id_etu', $idE);
        $this->db->where('id_comp', $idcomp);
        $this->db->update($this->get_table());
    }

    public function ajout_niveau($comp =array())
    {
        $this->insert($comp);
    }

    public function delete_niv($idE, $idcomp)
    {
        $this->db->where('id_etu', $idE);
        $this->db->where('id_comp', $idcomp);
        $this->db->delete($this->get_table());
    }

    public function exist_niv($idE)
    {
        $this->db->select('*');
        $this->db->from($this->get_table());
        $this->db->where('id_etu', $idE);
        $resultat = $this->db->get();

        return $resultat->num_rows() === 0;
    }
}
