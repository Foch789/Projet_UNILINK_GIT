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
			<input type="email" name="user_email" placeholder=" Email" value="{'user_email'|set_value}"  required>
		</div>
		<div>
			<label for="mdp">Mot de passe :</label>    
			<input type="password"  name="user_mdp" placeholder=" Mot de passe" required>
	 </div>
		<div>
			<a href="{site_url('Inscription')}">Pas inscrit ?</a>
		</div>
			{if not empty($error)}
			<div class= "erreur">
							{$error}
			</div>
		 	{/if}

		<div class="button">
			<button type="submit" name="form_connexion"><b>Envoyer</b></button>
		</div>
		<input type="hidden" name="redirect" value="{'redirect'|set_value}">
	</form>




</div>

{/block}
