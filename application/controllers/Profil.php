<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('profil');
        $this->load->model('Etudiant_model');
        $this->load->model('Enseignant_model');
        $this->load->model('Aide_model');
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
        $data['etu'] = true;
        $data['comps'] = true;


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

        $this->load->model('Niveau_model');

        if ($this->Niveau_model->exist_niv($id)) {
            $data['comps'] = false;
        }


        $etudiant = array();
        $t = array();
        $etudiant = $this->Etudiant_model->get_etudiant($id);
        $t = $this->Niveau_model->get_compt_etu($etudiant['id_etu']);

        $data['comp_active'] = $t;

        $this->parser->parse('body/profil/profil.tpl', $data);
    }

    public function view_aidant($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $data['id'] = $etudiant['id_etu'];
        $data['nom']  = $etudiant['nom_etu'];
        $data['prenom'] = $etudiant['prenom_etu'];
        $data['email'] = $etudiant['email_etu'];
        $data['description'] = $etudiant['desc_etu'];
        $data['logged_in'] = false;
        $data['etu'] = true;
        $data['comps'] = true;

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

        $data['aide'] = $this->Aide_model->get_aidant($id);

        $this->parser->parse('body/profil/aidant.tpl', $data);
    }

    public function view_aide($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $data['id'] = $etudiant['id_etu'];
        $data['nom']  = $etudiant['nom_etu'];
        $data['prenom'] = $etudiant['prenom_etu'];
        $data['email'] = $etudiant['email_etu'];
        $data['description'] = $etudiant['desc_etu'];
        $data['logged_in'] = false;
        $data['etu'] = true;
        $data['comps'] = true;

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

        $data['aide'] = $this->Aide_model->get_aide($id);

        $this->parser->parse('body/profil/aide.tpl', $data);
    }

    public function view_besoin_aide($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $data['id'] = $etudiant['id_etu'];
        $data['nom']  = $etudiant['nom_etu'];
        $data['prenom'] = $etudiant['prenom_etu'];
        $data['email'] = $etudiant['email_etu'];
        $data['description'] = $etudiant['desc_etu'];
        $data['logged_in'] = false;
        $data['etu'] = true;
        $data['comps'] = true;

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

        $data['aide'] = $this->Aide_model->get_demande_aide($id);

        $this->parser->parse('body/profil/besoin_aide.tpl', $data);
    }

    public function view_besoin_aidant($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $data['id'] = $etudiant['id_etu'];
        $data['nom']  = $etudiant['nom_etu'];
        $data['prenom'] = $etudiant['prenom_etu'];
        $data['email'] = $etudiant['email_etu'];
        $data['description'] = $etudiant['desc_etu'];
        $data['logged_in'] = false;
        $data['etu'] = true;
        $data['comps'] = true;

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

        $data['aide'] = $this->Aide_model->get_besoin_aide($id);

        $this->parser->parse('body/profil/besoin_aidant.tpl', $data);
    }
    public function view_modif_comp($id)
    {
        $data = &$this->data;

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $data['id'] = $etudiant['id_etu'];
        $data['nom']  = $etudiant['nom_etu'];
        $data['prenom'] = $etudiant['prenom_etu'];
        $data['email'] = $etudiant['email_etu'];
        $data['description'] = $etudiant['desc_etu'];
        $data['logged_in'] = false;
        $data['etu'] = true;
        $data['comps'] = true;

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

        $this->load->model('Niveau_model');

        $etudiant = $this->Etudiant_model->get_etudiant($id);

        $t = $this->Niveau_model->get_compt_etu($etudiant['id_etu']);


        $comp_n = $this->Niveau_model->get_comp_etu_non($etudiant['id_etu'], $etudiant['id_promo']);
        $tab = array();
        foreach ($comp_n as $key) {
            array_push($tab, $this->Competence_model->getLaComp($key));
        }

        if ($this->input->post('form_comp') !== null) {
            $this->load->library('form_validation');
            $this->load->library('encrypt');
            $this->load->helper('url');

            $rules = array();
            $tab2 = array();

            foreach ($t as $key) {
                $tab2['field'] = $key['intitule_comp'];
                $tab2['label'] = $key['intitule_comp'];
                array_push($rules, $tab2);
            }

            foreach ($tab as $key => $value) {
                $tab2['field'] = $value['intitule_comp'];
                $tab2['label'] = $value['intitule_comp'];
                array_push($rules, $tab2);
            }

            $this->form_validation->set_rules($rules);
            $this->load->model('Niveau_model');

            foreach ($t as $key) {
                if ($this->input->post($key['intitule_comp']) == 0) {
                    $this->Niveau_model->delete_niv($user['id'], $key['id_comp']);
                    $this->Aide_model->mise_a_jour($user['id'], $key['id_comp'], $this->input->post($key['intitule_comp']));
                } elseif ($this->input->post($key['intitule_comp']) !== $key['niveau']) {
                    $this->Niveau_model->mise_a_jour_niveau($user['id'], $key['id_comp'], $this->input->post($key['intitule_comp']));
                    $this->Aide_model->mise_a_jour($user['id'], $key['id_comp'], $this->input->post($key['intitule_comp']));
                }
            }

            foreach ($tab as $key => $value) {
                if ($this->input->post($value['intitule_comp']) != 0) {
                    $comp = array("niveau" => $this->input->post($value['intitule_comp']),"id_etu" => $user['id'],"id_comp" => $value['id_comp']);
                    $this->Niveau_model->ajout_niveau($comp);
                    $this->Aide_model->mise_a_jour($user['id'], $value['id_comp'], $this->input->post($value['intitule_comp']));
                }
            }
        }

        $etudiant = array();
        $t = array();
        $etudiant = $this->Etudiant_model->get_etudiant($id);
        $t = $this->Niveau_model->get_compt_etu($etudiant['id_etu']);

        $data['comp_active'] = $t;

        $comp_n =array();
        $comp_n = $this->Niveau_model->get_comp_etu_non($etudiant['id_etu'], $etudiant['id_promo']);
        $tab = array();
        foreach ($comp_n as $key) {
            array_push($tab, $this->Competence_model->getLaComp($key));
        }

        $data['comp_non_active'] = $tab;


        $this->parser->parse('body/modif_competence.tpl', $data);
    }
}
