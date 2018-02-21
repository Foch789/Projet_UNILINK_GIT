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

        $data = array(
        'id' => $etudiant['id_etu'],
        'nom'  => $etudiant['nom_etu'],
        'prenom'  => $etudiant['prenom_etu'],
        'email'     => $etudiant['email_etu'],
        'description' => $etudiant['desc_etu'],
        'logged_in' => false
      );

        $this->load->library('session');
        $user = $this->session->get_userdata();
        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }
        $this->smarty->assign('data', $data);
        $this->smarty->display('body/profil.tpl');
    }

    public function deconnexion()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect("Home");
    }
}
