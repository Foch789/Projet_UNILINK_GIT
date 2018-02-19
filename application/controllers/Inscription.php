<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('inscription');
        $this->load->model('Etudiant_model');
    }

    public function index()
    {
        $data = &$this->data;

        if (isset($_POST['form_inscription'])) {
            $this->load->library('form_validation');
            $this->load->helper('url');

            $rules = array(
                array(
                        'field' => 'nom_etu',
                        'label' => 'Nom',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'prenom_etu',
                        'label' => 'Prenom',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'id_promo',
                        'label' => 'Promos',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'email',
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
                if ($this->Etudiant_model->email_exist($this->input->post('email'))) {
                    if ($this->input->post('mdp') === $this->input->post('mdpc')) {
                        $etudiant = array('nom_etu' => $this->input->post('nom_etu'), 'prenom_etu' => $this->input->post('prenom_etu'),'email' => $this->input->post('email'),'mdp' => $this->input->post('mdp'),'id_promo' => $this->input->post('id_promo'));
                        $this->Etudiant_model->ajout_etudiant($etudiant);
                        redirect('Connection');
                    } else {
                        echo "Erreur de mot de passe !";
                    }
                } else {
                    echo "Il y a quelqu'un !";
                }
            } else {
                //$data['errors'] = $this->form_validation->error_array();
                echo "PAS REMPLIE";
            }
        }

        $this->parser->parse('body/inscription.tpl');
    }
}
