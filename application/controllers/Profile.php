<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('profil');
    }

    public function index()
    {
        $this->parser->parse('body/profil.tpl');
    }
}