<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('profil');
        $this->load->model('Etudiant_model');
    }

    public function view($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $data['id'] = $etudiant['id_etu'];
        $data['nom']  = $etudiant['nom_etu'];
        $data['prenom'] = $etudiant['prenom_etu'];
        $data['email'] = $etudiant['email_etu'];
        $data['description'] = $etudiant['desc_etu'];
        $data['logged_in'] = false;

        $this->load->library('session');
        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/profil.tpl', $data);
    }

    public function view_aidant()
    {
        $data = &$this->data;
    }

    public function view_aide()
    {
        $data = &$this->data;
    }

    public function view_besoin_de_toi()
    {
    }

    public function view_personne_besoin()
    {
        $data = &$this->data;
    }
}
