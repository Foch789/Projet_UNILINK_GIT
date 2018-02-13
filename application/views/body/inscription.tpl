{extends file="../master.tpl"}

{block name= "css"}
	<link rel="stylesheet" href="{base_url('asset/css/styleco.css')}"/>
{/block}

{block name="body"}

<div class="containment">

	<h2>Inscription </h2>

	<form action="" method="post">
		
		<div>
			<label for="nom">Nom:</label>    
			<input type="text" name="nom" placeholder=" Nom" required>
		</div>

		<div>
			<label for="prenom">Prenom:</label>    
			<input type="text" name="prenom" placeholder=" Prenom" required>
		</div>

		<div>
			<label for="promos">Promos:</label>
			<SELECT name="promos" placeholder=" Promos" required>
							<OPTION> None
							<OPTION> MMI 1
							<OPTION> MMI 2
							<OPTION> INFO 1
							<OPTION> INFO 2
					</SELECT>
		</div>

		<div>
			<label for="email">E-mail :</label>
			<input type="email" name="user_email" placeholder=" Email"required>
		</div>

		<div>
			<label for="mdp">Mot de passe :</label>
			<input type="password" name="mdp" placeholder=" Mot de passe"required>
		</div>

		<div>
			<label for="mdpc">Confirmation:</label>
			<input type="password" name="mdpc" placeholder=" Mot de passe de confirmation"required>
		</div>

		<div class="button">
			<button type="submit" name="form_inscription"><b>Envoyer</b></button>
		</div>

	</form>

</div>

{/block}
