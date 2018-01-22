<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
    }
    public function index()
    {
        $this->parser->parse('body/accueil.tpl'/*, $data*/);
    }
}
