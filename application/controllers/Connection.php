<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connection extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('connection');
    }

    public function index()
    {
        $this->parser->parse('body/connexion.tpl');
    }
}
