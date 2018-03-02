<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Competence_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("competence", array("id" => "id_comp", "intitule" => "intitule_comp"));
    }
}
