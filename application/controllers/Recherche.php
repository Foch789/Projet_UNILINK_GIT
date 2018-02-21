<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recherche extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('recherche');
        $this->load->library('session');
        $this->load->model('Etudiant_model');

        $data = &$this->data;
        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }
    }

    public function index()
    {
        //  $this->Etudiant_model->recherche($this->input->post('form_recherche'));

        $data = &$this->data;

        $this->parser->parse('body/recherche.tpl', $data);
        //$this->smarty->display('body/recherche.tpl');
    }
}
