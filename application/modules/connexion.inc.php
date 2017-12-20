<?php
//include_once 'config.inc.php';

$etat = true;

if (isset($_POST['form_connexion'])) { // Vérifie que l'on vient bien du formulaire
	
    if ($_POST['user_email'] != "root@free.fr")
    {
      $etat = false;
      echo "mail faux !";
    }
    if ($_POST['user_mdp']!= "root")
    {
      $etat= false ;
      echo "mdp faux !";
    }
    if ($etat==true)
    {
      header('Location:?page=profil');
    }
}
