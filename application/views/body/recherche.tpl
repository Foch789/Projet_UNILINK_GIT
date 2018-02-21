{extends file="../master.tpl"}

{block name= "css"}
	<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}

{block name="body"}

<div class="page">

	<h1>Vous êtes un professionnel à la recherche d'un stagiaire ?</h1>
	<h2>Trouvez le parmi nos étudiants</h2>

	<form action="" class="formulaire">
		<input class="champ" type="text" id="search" value="Recherche..." />
		<input class="form_recherche" type="image" src="{base_url('asset/img/magnifier.png')}"/>
	</form>

</div>

{/block}
