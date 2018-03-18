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

        return $copie;
    }

    //Recherhce avec le ou
    public function get_niveau_etudiant_sup($id = array()) //sup
    {
        $resultat = array();
        foreach ($id as $key => $value) {
            $this->db->select('id_etu');
            $this->db->from($this->get_table());
            $this->db->where($this->get_colonne()['id_comp'], $value);
            $this->db->where($this->get_colonne()['niveau'].'>', 3);
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
}
