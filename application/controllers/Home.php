<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('home');
        $this->load->library('smarty');
        $smarty = new Smarty();
    }

    public function index()
    {
        $this->smarty->display('body/accueil.tpl');
    }

    public function about()
    {
        $this->smarty->display('body/a_propos.tpl');
    }

    public function condition()
    {
        $this->smarty->display('body/conditions.tpl');
    }
}
