<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct('search');
    }

    public function index()
    {
        $this->parser->parse('body/recherche.tpl');
    }
}
