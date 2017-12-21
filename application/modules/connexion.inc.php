<?php

if (isset($_POST['form_connexion'])) { // Vérifie que l'on vient bien du formulaire
    include 'configBDD.inc.php';

    try {
        $R_log=$PDO_BDD->query('Select * from etudiant');
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage().'.<br/>');
    }
    $tab = $R_log->fetchAll(PDO::FETCH_ASSOC);

    foreach ($tab as $element) {
        if ($_REQUEST['user_email']==$element['email']) {
            if ($_REQUEST['user_mdp']==$element['mdp']) {
                session_start();
                $_SESSION['nom']=$element['nom_etu'];
                $_SESSION['prenom']=$element['prenom_etu'];
                $_SESSION['monmdp']=$_REQUEST['user_mdp'];
                header('Location:?page=profil');
            } else {
                echo "Erreur de mot de passe.";
                break;
            }
        }
    }
}
