<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connection extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('connection');
    }

    public function index()
    {
        $data = &$this->data;
        //$this->load->helper('form');

        if (isset($_POST['form_connexion'])) {
            $this->load->library('form_validation');
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
                if ($_POST['user_email'] == "laurentdoiteau@free.fr") {
                    redirect('Profile');
                } else {
                    //$data['errors'] = array('Identifiant ou mot de passe incorrect.');
                    echo "Identifiant ou mot de passe incorrect.";
                }
            } else {
                //$data['errors'] = $this->form_validation->error_array();
                echo "PAS REMPLIE";
            }
        }
        $this->parser->parse('body/connexion.tpl', $data);
    }
}
