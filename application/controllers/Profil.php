<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('profil');
        $this->load->model('Etudiant_model');
        $this->load->model('Aide_model');
        $this->load->library('session');
    }

    public function view($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $data['id'] = $etudiant['id_etu'];
        $data['adminP'] = $etudiant['admin'];
        $data['nom']  = $etudiant['nom_etu'];
        $data['prenom'] = $etudiant['prenom_etu'];
        $data['email'] = $etudiant['email_etu'];
        $data['description'] = $etudiant['desc_etu'];
        $data['logged_in'] = false;


        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/profil/profil.tpl', $data);
    }

    public function view_aidant($id)
    {
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }


        $this->parser->parse('body/profil/aidant.tpl', $data);
    }

    public function view_aide($id)
    {
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/profil/aide.tpl', $data);
    }

    public function view_besoin_aide($id)
    {
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/profil/besoin_aide.tpl', $data);
    }

    public function view_besoin_aidant($id)
    {
        $data = &$this->data;
        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }

        $resultat = $this->Aide_model->get_besoin_aide($id);//Il me faut extraire les id des etudiants et la comp
        $etudiants = array();
        $comp = array();
        //foreach ($resultat as $key => $value) {
        //  array_push($etudiants, $this->get_etudiant($value['id_aidant']));
        //get la comp de l'etudiant
        //  }
        //assemblé
        //$data['etudiants'] =
        //$data['competence'] =
        $this->parser->parse('body/profil/besoin_aidant.tpl', $data);
    }
    public function view_modif_comp($id)
    {

        //if() test si c'est lui
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }

        $this->load->model('Competence_model');

        $data['comp'] = $this->Competence_model->getComp($id);

        $this->parser->parse('body/modif_competence.tpl', $data);
    }

    public function view_admin($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);
        $data['admin'] = $etudiant['admin'];

        $data['resultat'] = $this->Etudiant_model->get_all_etudiant();

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/admin.tpl', $data);
    }

    public function view_admin_comp($id)
    {
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/admin_comp.tpl', $data);
    }
}
