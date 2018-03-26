<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Promo_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("promo", array("id" => "id_promo", "intitule" => "intitule_promo"));
    }
    // Retourne tous les noms de compétences sous la forme d'un tableau à index
    public function get_All_Promo()
    {
        $this->db->select('*');
        $this->db->from($this->get_table());
        $resultat = $this->db->get();

        return $resultat->result_array();
    }

    public function get_comp_Promo($id)
    {
        $this->load->model('Competence_model');

        $this->db->select('id_comp,id_promo,intitule_comp');
        $this->db->from($this->Competence_model->get_table());
        $this->db->where('id_promo', $id);
        $resultat = $this->db->get();

        return $resultat->result_array();
    }
}
