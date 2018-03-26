<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connexion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('connexion');
        $this->load->model('Etudiant_model');
        $this->load->model('Enseignant_model');
    }

    public function index()
    {
        $data = &$this->data;
        $this->load->helper('form');


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
                $id_user = $this->Enseignant_model->get_connexion($this->input->post('user_email'), $this->input->post('user_mdp'));
                if (is_numeric($id_user)) {
                    $this->load->library('session');
                    $enseignant = $this->Enseignant_model->get_enseignant($id_user);

                    $_SESSION['id'] = $enseignant['id_ens'];
                    $_SESSION['logged_in'] = true;
                    $_SESSION['admin'] = true;

                    redirect("Admin/view_admin/".$id_user."");
                } else {
                    $id_user = $this->Etudiant_model->get_connexion($this->input->post('user_email'), $this->input->post('user_mdp'));
                    if (is_numeric($id_user)) {
                        $this->load->library('session');
                        $etudiant = $this->Etudiant_model->get_etudiant($id_user);

                        $_SESSION['id'] = $etudiant['id_etu'];
                        $_SESSION['logged_in'] = true;

                        redirect("Profil/view_modif_comp/".$id_user."");
                    } else {
                        $data['error'] = $id_user;
                    }
                }
            }
        }
        $this->parser->parse('body/connexion.tpl', $data);
    }

    public function deconnexion()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect("Home");
    }
}
