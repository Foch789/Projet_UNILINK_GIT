{extends file="../master.tpl"}

{block name= "css"}
	<link rel="stylesheet" href="{base_url('asset/css/styleco.css')}"/>
{/block}

{block name="body"}

<div class="containment">

	<h2>Connexion</h2>

	<form action="" method="post">
		<div>
			<label for="email">E-mail :</label>
			<input type="email" name="user_email" placeholder=" Email" required>
		</div>
		<div>
			<label for="mdp">Mot de passe :</label>    
			<input type="password"  name="user_mdp" placeholder=" Mot de passe" required>
	 </div>
		<div>
			<a href="{site_url('Inscription')}">Pas inscrit ?</a>
		</div>
		<div class="button">
			<button type="submit" name="form_connexion"><b>Envoyer</b></button>
		</div>
	</form>
	{if not empty($errors)}
		{foreach $errors as $error}
					<li>{$error}</li> </br>
		{/foreach}
	{/if}


</div>

{/block}
