<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connection extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('connection');
        $this->load->library('parser');
    }

    public function index()
    {
        //$this->load->view('body/connexion.tpl');
        $this->parser->parse('body/connexion.tpl');
    }
}
