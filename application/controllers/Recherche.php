<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recherche extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('recherche');
        $this->load->model('Etudiant_model');
    }

    public function index()
    {
        //  $this->Etudiant_model->recherche($this->input->post('form_recherche'));
        $this->smarty->display('body/recherche.tpl');
    }
}
