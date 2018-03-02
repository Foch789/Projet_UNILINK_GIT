<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('BDD_models.php');

class Aide_model extends BDD_models
{
    public function __construct()
    {
        parent::__construct("aide", array("aidant" => "aidant", "demande_aide" => "demande_aide", "accepter_aide" => "accepter_aide", "id_aide" => "id_aide", "id_aidant" => "id_aidant","id_comp" => "id_comp"));
    }

    public function ajout_aide($id = array())
    {
    }

    public function supprimer_aide($id = array())
    {
    }

    public function modifier_aidant($id, $etat)
    {
    }

    public function modifier_demande_aide($id, $etat)
    {
    }

    public function modifier_accepter_aide($id, $etat)
    {
    }
}
