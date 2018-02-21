<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('home');
        $this->load->library('smarty');
        //$this->load->library('session');
        session_start();
        $smarty = new Smarty();
    }

    public function index()
    {
        $data = &$this->data;

        $this->smarty->assign('data', $data);
        $this->smarty->display('body/accueil.tpl');
    }

    public function about()
    {
        $this->smarty->display('body/a_propos.tpl');
    }

    public function condition()
    {
        //  $this->smarty->assign('data', $data);
        $this->smarty->display('body/conditions.tpl');
    }
}
