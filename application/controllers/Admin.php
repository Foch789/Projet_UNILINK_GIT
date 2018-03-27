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

        if ($this->input->post('form_comp') !== null) {
            $this->load->library('form_validation');
            $this->load->library('encrypt');
            $this->load->helper('url');

            $rules = array(
                array(
                        'field' => 'comp',
                        'label' => 'Comp',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'id_promo',
                        'label' => 'Promos',
                        'rules' => 'required'
                )
        );

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run()) {
                if ($this->input->post('id_promo') !== 'None') {
                    $this->load->model('Competence_model');
                    $this->Competence_model->ajoutComp($this->input->post('id_promo'), $this->input->post('comp'));
                } else {
                    $data['errors'] =   array("Mettez votre promo");
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

    public function supprimer($id)
    {
        $data = &$this->data;
        $user = $this->session->get_userdata();
        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                if (isset($user['admin']) === true) {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                    $data['admin'] = true;
                    $this->Etudiant_model->suppr_etudiant($id);
                } else {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                }
            }
        }

        redirect("Admin/view_admin/".$data['user_id_co']."");
    }

    public function mettreAdmin($id)
    {
        $data = &$this->data;
        $user = $this->session->get_userdata();
        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                if (isset($user['admin']) === true) {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                    $data['admin'] = true;
                    $this->Etudiant_model->etudiant_a_enseignant($id);
                } else {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                }
            }
        }

        redirect("Admin/view_admin/".$data['user_id_co']."");
    }

    public function supprimerComp($id)
    {
        $this->load->model('Competence_model');
        $data = &$this->data;
        $user = $this->session->get_userdata();
        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                if (isset($user['admin']) === true) {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                    $data['admin'] = true;
                    $this->Competence_model->supprimeComp($id);
                } else {
                    $data['user_id_co'] = $user['id'];
                    $data['logged_in'] = true;
                }
            }
        }

        redirect("Admin/view_comp/".$data['user_id_co']."");
    }
}
