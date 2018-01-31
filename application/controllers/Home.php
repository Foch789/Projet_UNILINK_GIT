<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->parser->parse('body/accueil.tpl');
    }

    public function about()
    {
        $this->parser->parse('body/a_propos.tpl');
    }

    public function condition()
    {
        $this->parser->parse('body/conditions.tpl');
    }
}
