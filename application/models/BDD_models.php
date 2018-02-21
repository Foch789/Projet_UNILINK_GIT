<?php
defined('BASEPATH') or exit('No direct script access allowed');

abstract class BDD_models extends CI_Model
{
    private $table;
    private $colonne;
    private $nbr_lignes;

    public function __construct($_table, $_colonne)
    {
        $this->table = $_table;
        $this->colonne = $_colonne;
        $this->load->database();

        $this->db->select('*');
        $this->db->from($this->table);
        $resultat = $this->db->get();
        $this->nbr_lignes = $resultat->num_rows();
    }

    public function get_table()
    {
        return $this->table;
    }

    public function get_colonne()
    {
        return $this->colonne;
    }

    public function get_nbr_lignes()
    {
        return $this->nbr_lignes;
    }

    /*public function get($id)
    {
        if (is_exist($id)->num_rows() === 1) {
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where($this->colonne['id'], $id);
        } else {
            show_error('Error');
        }
    }*/

    public function to_real_name($data)
    {
        $d = array();

        foreach ($data as $key => $value) {
            $d[$key] = $value;
        }

        foreach ($d as $key => $element) {
            echo $key.":".$element;
        }

        return $d;
    }

    /*public function update($id, $ligne)
    {
    }*/

    public function insert($ligne)
    {
        $this->db->set($this->to_real_name($ligne));
        if ($this->db->insert($this->table) === false) {
            show_error('Model, impossible de rajouter la bdd.');
        }
    }

    /*public function delete($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete($this->table) === false) {
            show_error('Model, impossible de supprimer une ligne de la bdd.');
        }
    }*/
}
