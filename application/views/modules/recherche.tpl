{extends file="../layout.tpl"}

{block name= "css"}
	{* <link rel="stylesheet" href="asset/css/style2.css"/> *}
{/block}

{block name="body"}

<div class="page">

	<h1>Vous êtes un professionnel à la recherche d'un stagiaire ?</h1>
	<h2>Trouvez le parmi nos étudiants</h2>

	<form action="recherche.inc.php" class="formulaire">
		<input class="champ" type="text"  name = "form" value="Recherche..." />
		<input class="image" type="image" name ="valide" src="asset/img/magnifier.png " />
	</form>

</div>

{/block}
