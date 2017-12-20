{extends file="../layout.tpl"}
{block name= "css"}
	<link rel="stylesheet" href="asset/css/styleco.css"/>
{/block}

{block name="body"}

<div class="containment">

	<h2>Connexion </h2>

	<form action="" method="post">
		<div>
			<label for="email">E-mail :</label>
			<input type="text" name="user_email">
		</div>


		<div>
			<label for="mdp">Mot de passe :</label>    
			<input type="password"  name="user_mdp">   </div>
		<div>
			<a href="?page=inscription">Pas inscrit ?</a>
		</div>
		<div class="button">
			<button type="submit" name="form_connexion"><b>Envoyer</b></button>
		</div>

	</form>


</div>

{/block}
