<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Competence_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("competence", array("id" => "id_comp", "intitule" => "intitule_comp"));
    }
    // Retourne tous les noms de compétences sous la forme d'un tableau à index
    public function getComp($id)
    {
        $resultat = array();
        $this->db->from('etudiant');
        $this->db->join('niveau', 'etudiant.id_etu = niveau.id_etu');
        $this->db->join('competence', 'niveau.id_comp = competence.id_comp');
        $this->db->where('niveau.id_etu', $id);
        $foo = $this->db->get();
        foreach ($foo->result_array() as $item) {
            array_push($resultat, $item);
        }


        return $resultat;
    }

    public function getCompetencePromo($idpromo)
    {
        $resultat=array();
        $this->db->select('*');
        $this->db->from($this->get_table());
        $this->db->join('promo', 'competence.id_promo = promo.id_promo');
        $this->db->where('id_promo', $idpromo);
        $foo = $this->db->get();
        foreach ($foo->result_array() as $item) {
            array_push($resultat, $item);
        }
        return $resultat;
    }
    // Le getCompetencePromo renvoi stocke l'id des competence, tu peux l'utiliser pour setCompetence

    public function setCompetence($idCompetence, $idetudiant, $nouveauNiveau)
    {
        // Faire les vérifications par rapport au formulaire
        $this->db->set('niveau', $nouveauNiveau);
        $this->db->where('id_comp', $idCompetence);
        $this->db->where('id_etu', $idetudiant);
        $this->db->update('niveau');
    }

    public function supprimeComp($idComp)
    {
        $this->db->where($this->get_colonne()['id'], $idComp);
        $this->db->delete($this->get_table());
    }

    public function ajoutComp($idPromo, $nom)
    {
        $this->insert(array("id_promo" => $idPromo,"intitule_comp" => $nom));
    }
}
