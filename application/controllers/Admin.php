<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('profil');
        $this->load->model('Etudiant_model');
        $this->load->model('Enseignant_model');
        $this->load->library('session');
    }

    public function view_admin($id)
    {
        $data = &$this->data;

        $enseignant = $this->Enseignant_model->get_enseignant($id);

        $data['id'] = $enseignant['id_ens'];
        $data['nom']  = $enseignant['nom_ens'];
        $data['prenom'] = $enseignant['prenom_ens'];
        $data['email'] = $enseignant['email_ens'];
        $data['logged_in'] = false;


        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                if (isset($user['admin']) === true) {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                    $data['admin'] = true;
                } else {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                }
            }
        }

        $data['resultat'] = $this->Etudiant_model->get_all_etudiant();

        $this->parser->parse('body/admin.tpl', $data);
    }

    public function view_comp($id)
    {
        $data = &$this->data;

        $enseignant = $this->Enseignant_model->get_enseignant($id);

        $data['id'] = $enseignant['id_ens'];
        $data['nom']  = $enseignant['nom_ens'];
        $data['prenom'] = $enseignant['prenom_ens'];
        $data['email'] = $enseignant['email_ens'];
        $data['logged_in'] = false;


        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                if (isset($user['admin']) === true) {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                    $data['admin'] = true;
                } else {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                }
            }
        }

        $this->load->model('Promo_model');

        $promo = $this->Promo_model->get_All_Promo();

        foreach ($promo as $key => $value) {
            $comp[$value['id_promo']] = array($this->Promo_model->get_comp_Promo($value['id_promo']),$value['intitule_promo']);
        }

        $data['comp'] = $comp;

        $this->parser->parse('body/admin_comp', $data);
    }
}
