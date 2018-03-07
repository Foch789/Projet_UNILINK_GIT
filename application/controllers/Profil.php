<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('profil');
        $this->load->model('Etudiant_model');
        $this->load->library('session');
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


        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
                //RAjouter admin dans la BDD ET ICI pour rajouter des chose en tant qu'admin
            }

            //Mettre les compétences
        }




        $this->parser->parse('body/profil/profil.tpl', $data);
    }

    public function view_aidant()
    {

        //if() test si c'est lui
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/profil/aidant.tpl', $data);

    }

    public function view_aide()
    {

        //if() test si c'est lui
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/profil/aide.tpl', $data);

    }

    public function view_besoin_aide()
    {

        //if() test si c'est lui
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }

        $this->parser->parse('body/profil/besoin_aide.tpl', $data);

    }

    public function view_besoin_aidant()
    {

        //if() test si c'est lui
        $data = &$this->data;

        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }

        //$this->load->model('Niveau_model');

        //$resultat = $this->Niveau_model->get_etudiant_niveau($data['user_id_co']);

        //$data["etudiants"] = $resultat;

        $this->parser->parse('body/profil/besoin_aidant.tpl', $data);

    }
}
