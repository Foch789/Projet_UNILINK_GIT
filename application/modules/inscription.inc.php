<?php

if (isset($_POST['inscrit']))
{
	$etat = true;
	$tabIns = array("nom", "prenom", "promos","user_mail","mdp","cmdp");
	/*foreach( $tabIns as $value)
	{
		if($_POST[$value] == "")
		{
			echo "Vous avez oublier de mettre votre ".$value;
			$etat = false;
		}
	}*/
	
	if($_POST["mdp"] != $_POST["cmdp"])
	{
		$etat = false;
	}
	
	if($etat == true )
	{
		echo "OUI !!";
	}
	
	
}


?>
