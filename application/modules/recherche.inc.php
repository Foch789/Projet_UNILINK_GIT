<?php
require_once 'configBDD.inc.php';



try
{
  $requete = $PDO_BDD -> prepare("Select nom_etu, prenom_etu, intitule_comp from etudiant natural join competence where intitule_comp=:comp");
  $requete->execute(array('comp'=>$form));
}

catch(Exception $e)
{
  die('Erreur'.$e->getMessage().'</br>');
}


while($line = $requete->fetch(PDO::FETCH_OBJ))
  echo $line->nom_etu.' '.$line->prenom_etu.' '.$line->intitule_comp.'</br>';
?>
