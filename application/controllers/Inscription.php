<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('inscription');
    }

    public function index()
    {
        $data = &$this->data;

        if (isset($_POST['form_inscription'])) {
            $this->load->library('form_validation');
            $this->load->helper('url');

            $rules = array(
                array(
                        'field' => 'nom',
                        'label' => 'Nom',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'prenom',
                        'label' => 'Prenom',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'promos',
                        'label' => 'Promos',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'user_email',
                        'label' => 'Email',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'user_email',
                        'label' => 'Email',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'mdp',
                        'label' => 'Password',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'mdpc',
                        'label' => 'PasswordC',
                        'rules' => 'required'
                )
        );

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run()) {
                if ($_POST['user_email'] == "laurentdoiteau@free.fr") {
                    redirect('Connection');
                } else {
                    //$data['errors'] = array('Identifiant ou mot de passe incorrect.');
                    echo "Identifiant ou mot de passe incorrect.";
                }
            } else {
                //$data['errors'] = $this->form_validation->error_array();
                echo "PAS REMPLIE";
            }
        }

        $this->parser->parse('body/inscription.tpl');
    }
}
