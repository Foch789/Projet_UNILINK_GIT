<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recherche extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('recherche');
        $this->load->library('session');
        $this->load->model('Etudiant_model');
        $this->load->model('Niveau_model');

        $data = &$this->data;
        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['logged_in'] = true;
            }
        }
    }

    public function index()
    {
        $data = &$this->data;

        if ($this->input->post('form_recherche') !== null) {
            $this->load->library('form_validation');
            $this->load->helper('url');

            $rules = array(
                array(
                        'field' => 'PHP',
                        'label' => 'PHP',
                ),
                array(
                        'field' => 'C++',
                        'label' => 'C++',
                ),
                array(
                        'field' => 'Math',
                        'label' => 'Mathematiques',
                ),
                array(
                        'field' => 'Moteur',
                        'label' => 'Moteur 3D',
                ),
                array(
                        'field' => 'Algo',
                        'label' => 'Algorithmique',
                ),
                array(
                        'field' => 'Web',
                        'label' => 'Web',
                ),
                array(
                        'field' => 'Systeme',
                        'label' => 'Systeme',
                ),
                array(
                        'field' => 'Anglais',
                        'label' => 'Anglais',
                ),
                array(
                        'field' => 'PPP',
                        'label' => 'PPP',
                ),
                array(
                        'field' => 'Com',
                        'label' => 'Communication',
                )

        );

            $this->form_validation->set_rules($rules);


            //if ($this->form_validation->run()) {
            $table = array(
                "PHP" => $this->input->post('PHP'),
                "C++" => $this->input->post('C++'),
                "Math" => $this->input->post('Math'),
                "Moteur" => $this->input->post('Moteur'),
                "Algo" => $this->input->post('Algo'),
                "Web" => $this->input->post('Web'),
                "Systeme" => $this->input->post('Systeme'),
                "Anglais" => $this->input->post('Anglais'),
                "PPP" => $this->input->post('PPP'),
                "Com" => $this->input->post('Com')
              );

            foreach ($table as $key => $value) {
                if ($value === null) {
                    unset($table[$key]);
                }
            }

            $resultat = $this->Niveau_model->get_niveau_etudiant($table);

            $etudiants = array();

            foreach ($resultat as $key => $value) {
                array_push($etudiants, $this->Etudiant_model->get_etudiant($value));
            }


            $data["etudiants"] = $etudiants;

            //  } else {
            //    echo "PAS REMPLIE";
          //  }
        }

        $this->parser->parse('body/recherche.tpl', $data);
    }
}
