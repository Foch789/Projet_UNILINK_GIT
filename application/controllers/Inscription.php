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
        $this->load->helper('form');

        if ($this->input->post('form_inscription') !== null) {
            $this->load->library('form_validation');
            $this->load->library('encrypt');
            $this->load->helper('url');

            $rules = array(
                array(
                        'field' => '',
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
                if ($this->input->post('id_promo') !== 'None') {
                    if (!$this->Etudiant_model->email_exist($this->input->post('email'))) {
                        if ($this->input->post('mdp') === $this->input->post('mdpc')) {
                            $etudiant = array('nom_etu' => $this->input->post('nom_etu'), 'prenom_etu' => $this->input->post('prenom_etu'),'email_etu' => $this->input->post('email'),'mdp_etu' => $this->encrypt->encode($this->input->post('mdp')),'id_promo' => $this->input->post('id_promo'));
                            $this->Etudiant_model->ajout_etudiant($etudiant);
                            redirect('Connexion');
                        } else {
                            $data['errors'] =  array( "Erreur de mot de passe.");
                        }
                    } else {
                        $data['errors'] =   array("Compte déjà existant.");
                    }
                } else {
                    $data['errors'] =   array("Mettez votre promo");
                }
            } else {
                $data['errors'] = $this->form_validation->error_array();
            }
        }

        $this->parser->display('body/inscription.tpl', $data);
    }
}
