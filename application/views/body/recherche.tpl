{extends file="../master.tpl"}

{block name= "css"}
	<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}

{block name="body"}

<div class="containment">

    <div class="rech">
        <h1>Vous êtes un professionnel à la recherche d'un stagiaire ?</h1>

        <h2>Trouvez le parmi nos étudiants</h2>
    </div>
	<form action="" method="post" class="formulaire">
		<fieldset>
			{* <input class="champ" type="text" name="search" value="Recherche..." /> *}
			<div class="groupe">
				<label> PHP</label>  	<input type="checkbox" name="PHP" value="1">  
				<label>C++</label><input type="checkbox" name="C++" value="2">
				<label> Mathematiques</label> <input type="checkbox" name="Math" value="3">
			<label>Moteurs 3D</label><input type="checkbox" name="Moteur" value="4">
			<label>Algorithmique</label><input type="checkbox" name="Algo" value="5">
			<label>Web</label><input type="checkbox" name="Web" value="6">

			<label>Système</label><input type="checkbox" name="Systeme" value="7">
			 <label>Anglais</label><input type="checkbox" name="Anglais" value="8">
			 <label>PPP</label><input type="checkbox" name="PPP" value="9">
			<label>Communication</label> <input type="checkbox" name="Com" value="10">
		</div>
		<div class="groupe">
				<label>ET</label> <input type="checkbox" name="Com" value="">
				<label>OU</label> <input type="checkbox" name="Com" value="">


			<button class="button" type="submit" name="form_recherche"><b>Envoyer</b></button>
			</div>
			{* <input name="recherche" alt="Recherche" class="form_recherche" type="image" src="{base_url('asset/img/magnifier.png')}"/></br> *}



		</fieldset>
	</form>

	<div class= "listeEtu">
	 {foreach from=$etudiants item=$value key=$key}
	 	<a href="{site_url('Profil/view/')}{$value['id_etu']}">{$value['nom_etu']} {$value['prenom_etu']}</a></br>
	{/foreach}
	</div>

</div>

{/block}
