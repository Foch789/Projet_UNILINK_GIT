{extends file="../master.tpl"} {block name= "css"}
<link rel="stylesheet" href="{base_url('asset/css/styleco.css')}" /> {/block} {block name="body"}

<div class="containment">

	<h2>Inscription </h2>

	<form action="" method="post">

		<div>
			<label for="Nom">Nom:</label>
			<input type="text" name="nom_etu" placeholder=" Nom" value="{'nom_etu'|set_value}" required>
		</div>

		<div>
			<label for="Prenom">Prenom:</label>
			<input type="text" name="prenom_etu" placeholder=" Prenom" value="{'prenom_etu'|set_value}" required>
		</div>

		<div>
			<label for="Promos">Promos:</label>
			<select name="id_promo" placeholder=" Promos" value="{'id_promo'|set_value}" required>
							<option> None
							<option value="1"> INFO 1</option>
							<option value="2"> INFO 2</option>
							<option value="3"> MMI 1</option>
							<option value="4"> MMI 2</option>
					</select>
		</div>

		<div>
			<label for="Email">E-mail :</label>
			<input type="email" name="email" placeholder=" Email" value="{'email'|set_value}" required>
		</div>

		<div>
			<label for="Password">Mot de passe :</label>
			<input type="password" name="mdp" placeholder=" Mot de passe" required>
		</div>

		<div>
			<label for="Passwordc">Confirmation:</label>
			<input type="password" name="mdpc" placeholder=" Mot de passe de confirmation" required>
		</div>
		{if not empty($errors)}
		{foreach $errors as $error}
			{$error}</br>
		{/foreach}
		{/if}

		<div class="button">
			<button type="submit" name="form_inscription"><b>Envoyer</b></button>
		</div>

		<input type="hidden" name="redirect" value="{'redirect'|set_value}">
	</form>

</div>

{/block}
