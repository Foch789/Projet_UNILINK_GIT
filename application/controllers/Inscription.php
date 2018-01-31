<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('inscription');
    }

    public function index()
    {
        $this->parser->parse('body/inscription.tpl');
    }
}
