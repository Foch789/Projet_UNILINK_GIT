<?php
// $sLoginEtu = $_POST['user_name'];
// $sMdpEtu = $_POST['mdp'];
//
// try {
//     $Req_prepare = $PDO_BDD->prepare("SELECT prenom, nom FROM Etudiant WHERE email=? AND mdp=? ");
//     $Req_prepare->execute(array($sLoginEtu,$sMdpEtu));
// } catch (Exception $e) {
//     die('<div style="font-weight:bold; color:red"> Erreur : '.$e->getMessage().'</div>');
// }
//
// $Etu = $Req_prepare->fetch(PDO::FETCH_NUM);
// echo '<h3>'.$Etu[0].' '.$Etu[1].'</h3>';

session_start();

if (!isset($_SESSION['prenom'])) {
    header('Location:?page=accueil');
} else {
    $data['prenom'] = $_SESSION['prenom'];
    $data['nom'] = $_SESSION['nom'];
}
