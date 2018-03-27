<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Enseignant_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("enseignant", array("id" => "id_ens","nom" => "nom_ens", "prenom" => "prenom_ens",  "email" => "email_ens","mdp" => "mdp_ens"));
    }

    public function get_enseignant($id)
    {
        $this->db->select('*');
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['id'], $id);
        $resultat = $this->db->get();

        return $resultat->row_array();
    }

    public function get_connexion($login, $mdp)
    {
        $error = '';
        if ($this->email_exist($login)) {
            $this->load->library('encrypt');
            $this->db->select('*');
            $this->db->from($this->get_table());
            $this->db->where($this->get_colonne()['email'], $login);
            $resultat = $this->db->get();
            $row = $resultat->row();
            $Vraimdp = $this->encrypt->decode($row->mdp_ens);
            if ($Vraimdp === $mdp) {
                return $row->id_ens;
            } else {
                $error = 'Mauvais mot de passe.';
                return $error;
                ;
            }
        } else {
            $error  =  "Le compte n'existe pas.";
            return $error;
            ;
        }
    }

    public function ajout_enseignant($enseignant)
    {
        $this->insert($enseignant);
    }

    public function suppr_enseignant($id)
    {
        //$this->insert($etudiant);
    }

    public function email_exist($email)
    {
        $this->db->select('*');
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['email'], $email);
        $resultat = $this->db->get();

        if ($resultat->num_rows() >1) {
            show_error('PLUSIEURS EMAILS ERROR');
        }

        return $resultat->num_rows() === 1;
    }
}
