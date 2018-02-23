{extends file="../master.tpl"}

{block name= "css"}
	<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}

{block name="body"}

<div class="page">

	<h1>Vous êtes un professionnel à la recherche d'un stagiaire ?</h1>
	<h2>Trouvez le parmi nos étudiants</h2>

	<form action="" method="post" class="formulaire">
			{* <input class="champ" type="text" name="search" value="Recherche..." /> *}
			<input type="checkbox" name="PHP" value="1"> PHP
			<input type="checkbox" name="C++" value="2"> C++
			<input type="checkbox" name="Math" value="3"> Mathematiques
			<input type="checkbox" name="Moteur" value="4"> Moteurs 3D
			<input type="checkbox" name="Algo" value="5"> Algorithmique
			<input type="checkbox" name="Web" value="6"> Web
			<input type="checkbox" name="Systeme" value="7"> Système
			<input type="checkbox" name="Anglais" value="8"> Anglais
			<input type="checkbox" name="PPP" value="9"> PPP
			<input type="checkbox" name="Com" value="10"> Communication
			{* <input name="recherche" alt="Recherche" class="form_recherche" type="image" src="{base_url('asset/img/magnifier.png')}"/></br> *}
			<div class="button">
				<button type="submit" name="form_recherche"><b>Envoyer</b></button>
			</div>

	</form>


	 {foreach from=$etudiants item=$value key=$key}
	 	<a href="{site_url('Profil/view/')}{$value['id_etu']}">{$value['nom_etu']} {$value['prenom_etu']}</a></br>
	{/foreach}

</div>

{/block}
