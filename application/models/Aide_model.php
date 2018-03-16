<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Aide_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("aide", array("aidant" => "aidant", "demande_aide" => "demande_aide", "accepter_aide" => "accepter_aide", "id_aide" => "id_aide", "id_aidant" => "id_aidant","id_comp" => "id_comp"));
    }

    public function get_aide($id_etu)//que tu aides
    {
        $this->db->select($this->get_colonne()['id_aide'], $this->get_colonne()['id_comp']);
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['id_aidant'], $id_etu);
        //$this->db->where($this->get_colonne()['demande_aide'], false);
        //$this->db->where($this->get_colonne()['aidant'], false);
        //$this->db->where($this->get_colonne()['accepter_aide'], false);
        $resultat = $this->db->get();

        return $resultat->row_array();
    }

    public function get_aidant($id_etu)//qui t'aide
    {
        $this->db->select($this->get_colonne()['id_aidant'], $this->get_colonne()['id_comp']);
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['id_aide'], $id);
        //$this->db->where($this->get_colonne()['demande_aide'], false);
        //$this->db->where($this->get_colonne()['aidant'], false);
        //$this->db->where($this->get_colonne()['accepter_aide'], false);
        $resultat = $this->db->get();

        return $resultat->row_array();
    }

    public function get_demande_aide($id_etu)//qui demande de l'aide
    {
        $this->db->select($this->get_colonne()['id_aide'], $this->get_colonne()['id_comp']);
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['id_aidant'], $id_etu);
        $this->db->where($this->get_colonne()['demande_aide'], true);
        $this->db->where($this->get_colonne()['aidant'], false);
        $this->db->where($this->get_colonne()['accepter_aide'], false);
        $resultat = $this->db->get();

        return $resultat->row_array();
    }

    public function get_besoin_aide($id_etu)//qui pourait t'aider
    {
        $this->db->select($this->get_colonne()['id_aidant'], $this->get_colonne()['id_comp']);
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['id_aide'], $id_etu);
        $this->db->where($this->get_colonne()['demande_aide'], false);
        $this->db->where($this->get_colonne()['aidant'], false);
        $this->db->where($this->get_colonne()['accepter_aide'], false);
        $resultat = $this->db->get();

        return $resultat->row_array();
    }

    //global

    public function mise_a_jour($id_etu, $id_comp, $niv)
    {
        if ($niv < 3) {
            supprimer_aide($id_etu, $id_comp);
            ajouter_aidant($id_etu, $id_comp);
        } elseif ($niv > 3) {
            supprimer_aidant($id_etu, $id_comp);
            ajouter_aide($id_etu, $id_comp);
        } elseif ($niv == 3) {
            supprimer_aide($id_etu, $id_comp);
            supprimer_aidant($id_etu, $id_comp);
        }
    }

    //niv < 3

    public function supprimer_aide($id_etu, $id_comp)
    {
        $this->db->where($this->get_colonne()['id_aidant'], $id_etu);
        $this->db->where($this->get_colonne()['id_comp'], $id_comp);
        $this->db->delete($this->get_table());
    }

    public function ajouter_aidant($id_etu, $id_comp)
    {
        $this->load->model('Niveau_model');
        $id = $this->Niveau_model->get_niveau_etudiant_sup(array('comp' => $id_comp));

        foreach ($id as $key => $value) {
            $ligne = array('aidant' => false, 'demande_aide' => false,'accepter_aide' => false,'id_aide' => $id_etu,'id_aidant' => $value,'id_comp' => $id_comp);
            $this->insert($ligne);
        }
    }

    // niv > 3

    public function supprimer_aidant($id_etu, $id_comp)
    {
        $this->db->where($this->get_colonne()['id_aide'], $id_etu);
        $this->db->where($this->get_colonne()['id_comp'], $id_comp);
        $this->db->delete($this->get_table());
    }

    public function ajouter_aide($id_etu, $id_comp)
    {
        $this->load->model('Niveau_model');
        $id = $this->Niveau_model->get_niveau_etudiant_inf(array('comp' => $id_comp));

        foreach ($id as $key => $value) {
            $ligne = array('aidant' => false, 'demande_aide' => false,'accepter_aide' => false,'id_aide' => $id_etu,'id_aidant' => $value,'id_comp' => $id_comp);
            $this->insert($ligne);
        }
    }

    // etat

    public function demande_aide($id_etu, $id_qui_aide, $id_comp)
    {
        //$this->db->set($this->get_colonne()['demande_aide'], true);
        $this->db->where($this->get_colonne()['id_aide'], $id_etu);
        $this->db->where($this->get_colonne()['id_aidant'], $id_qui_aide);
        $this->db->where($this->get_colonne()['id_comp'], $id_comp);
        $this->db->update($this->get_table());
    }

    public function refuse($id_etu, $id_etu2, $id_comp)
    {
        //$this->db->set($this->get_colonne()['demande_aide'], false);
        $this->db->where($this->get_colonne()['id_aide'], $id_etu);
        $this->db->where($this->get_colonne()['id_aidant'], $id_qui_aide);
        $this->db->where($this->get_colonne()['id_comp'], $id_comp);
        $this->db->update($this->get_table());
    }

    public function accepte($id_etu, $id_etu2, $id_comp)
    {
        //$this->db->set($this->get_colonne()['demande_aide'], true);
        $this->db->where($this->get_colonne()['id_aide'], $id_etu);
        $this->db->where($this->get_colonne()['id_aidant'], $id_qui_aide);
        $this->db->where($this->get_colonne()['id_comp'], $id_comp);
        $this->db->update($this->get_table());
    }

    public function reset($id_etu, $id_etu2, $id_comp)
    {
        $this->db->set($this->get_colonne()['aidant'], false);
        $this->db->set($this->get_colonne()['demande_aide'], false);
        $this->db->set($this->get_colonne()['accepter_aide'], false);
        $this->db->where($this->get_colonne()['id_aide'], $id_etu);
        $this->db->where($this->get_colonne()['id_aidant'], $id_qui_aide);
        $this->db->where($this->get_colonne()['id_comp'], $id_comp);
        $this->db->update($this->get_table());
    }
}
