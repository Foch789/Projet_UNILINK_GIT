<?php

if (isset($_POST['inscrit'])) {
    $etat = true;
    include 'configBDD.inc.php';

    if ($_POST['mdp'] != $_POST['cmdp']) {
        $etat = false;
    }

    try {
        $R_log=$PDO_BDD->query('Select * from etudiant');
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage().'.<br/>');
    }
    $tab = $R_log->fetchAll(PDO::FETCH_ASSOC);

    foreach ($tab as $element) {
        if ($_POST['user_email']==$element['email']) {
            $etat = false;
        }
    }


    if ($etat) {
        try {
            $PDO_BDD->exec("INSERT INTO etudiant VALUES('DEFAULT','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['user_mail']."','".$_POST['mdp']."','Rien',2,2)");
            header('Location:?page=accueil');
        } catch (Exception $e) {
            die("Erreur : ".$e->getMessage()."<br/>");
        }
    }
}
