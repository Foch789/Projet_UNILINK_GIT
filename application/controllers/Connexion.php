<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connexion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('connexion');
        $this->load->model('Etudiant_model');
    }

    public function index()
    {
        $data = &$this->data;

        if ($this->input->post('form_connexion') !== null) {
            $this->load->library('form_validation');
            $this->load->library('encrypt');
            $this->load->helper('url');

            $rules = array(
                array(
                        'field' => 'user_email',
                        'label' => 'Email',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'user_mdp',
                        'label' => 'Password',
                        'rules' => 'required'
                )
        );

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run()) {
                $id_user = $this->Etudiant_model->get_connexion($this->input->post('user_email'), $this->input->post('user_mdp'));
                if ($id_user !== false) {
                    $this->load->library('session');
                    $etudiant = $this->Etudiant_model->get_etudiant($id_user);

                    $data['id'] = $etudiant['id_etu'];
                    $data['logged_in'] = true;

                    redirect("Profil/view/".$id_user."");
                }
            } else {
                //$data['errors'] = $this->form_validation->error_array();
                echo "PAS REMPLIE";
            }
        }
        $this->smarty->assign('data', $data);
        $this->smarty->display('body/connexion.tpl');
    }

    public function deconnexion()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect("Home");
    }
}
