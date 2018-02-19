<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Etudiant_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("etudiant", array("id" => "id_etudiant", "nom" => "nom_etu", "prenom" => "prenom_etu", "aidant" => "aidant", "email" => "email","mdp" => "mdp", "description" => "description", "id_promo" => "id_promo"));
    }

    public function get_connexion($login, $mdp)
    {
        $this->db->select('*');
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['email'], $login);
        $resultat = $this->db->get();

        if ($resultat === 1) {
            if ($resultat['mdp'] === $mdp) {
                return true;
            } else {
                echo 'mauvais mot de passe.';
                return false;
            }
        } else {
            echo "Error connexion";
            return false;
        }
    }

    public function ajout_etudiant($etudiant)
    {
        $this->insert($etudiant);
    }

    public function edit_etudiant($id, $etudiant)
    {
        //$this->insert($etudiant);
    }

    public function suppr_etudiant($id)
    {
        //$this->insert($etudiant);
    }

    public function email_exist($email)
    {
        $this->db->select('*');
        $this->db->from($this->get_table());
        $this->db->where($this->get_colonne()['email'], $email);
        $resultat = $this->db->get();

        return $resultat->num_rows() === 0;
    }
}
