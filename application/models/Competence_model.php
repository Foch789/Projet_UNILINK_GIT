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
    public function getComp($id){
      $this->db->from('etudiant');
      $this->db->join('niveau','etudiant.id_etu = niveau.id_etu');
      $this->db->join('competence','niveau.id_comp = competence.id_comp');
      $this->db->where('niveau.id_etu',$id);
      $foo = $this->db->get();
      foreach($foo->result_array() as $item){
        $resultat[] = $item;
      }
     
      return $resultat;
    }



}
