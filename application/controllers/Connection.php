<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connection extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('connection');
        $this->load->model('Etudiant_model');
    }

    public function index()
    {
        $data = &$this->data;

        if (isset($_POST['form_connexion'])) {
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
                $id_user = $this->Etudiant_model->get_connexion($this->input->post('user_email'), $this->input->post('user_mdp'));
                if ($id_user !== false) {
                    $this->load->library('session');
                    $etudiant = $this->Etudiant_model->get_etudiant($id_user);

                    $_SESSION['id'] = $etudiant['id_etu'];
                    $_SESSION['logged_in'] = true;

                    redirect("Profile/view/".$id_user."");
                }
            } else {
                //$data['errors'] = $this->form_validation->error_array();
                echo "PAS REMPLIE";
            }
        }
        $this->parser->parse('body/connexion.tpl', $data);
    }
}
