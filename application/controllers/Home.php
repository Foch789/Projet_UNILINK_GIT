<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('home');
        $this->load->library('smarty');
        $this->load->library('session');
        $smarty = new Smarty();

        $data = &$this->data;
        $user = $this->session->get_userdata();

        if (isset($user['id'])) {
            if ($user['logged_in'] === true) {
                $data['user_id_co'] = $user['id'];
                $data['user_admin'] = $user['admin'];
                $data['logged_in'] = true;
            }
        }
    }

    public function index()
    {
        $data = &$this->data;

        $this->parser->parse('body/accueil.tpl', $data);
    }

    public function about()
    {
        $data = &$this->data;

        $this->parser->parse('body/a_propos.tpl', $data);
    }

    public function condition()
    {
        $data = &$this->data;

        $this->parser->parse('body/conditions.tpl', $data);
    }
}
