{extends file="../layout.tpl"}
{block name= "css"}
	<link rel="stylesheet" href="asset/css/styleco.css"/>
{/block}

{block name="body"}

<div class="containment">

	<h2>Inscription </h2>

	<form action="" method="post">
		<div>
			<label for="nom">Nom:</label>     <input type="text" id="nom" name="nom" required>
		</div>
		<div>
			<label for="prenom">Prenom:</label>     <input type="text" id="prenom" name="prenom" required>
		</div>
		<div>
			<label for="promos">Promos:</label>
			<SELECT name="promos">
							<OPTION>MMI 1
							<OPTION>MMI 2
							<OPTION>INFO 1
							<OPTION>INFO 2

					</SELECT>
		</div>


		<div>
			<label for="email">E-mail :</label>
			<input type="email" name="user_mail" required>
		</div>

		<div>
			<label for="mdp">Mot de passe :</label>
			<input type="password" name="mdp" required>
		</div>

		<div>
			<label for="mdpc">Confirmation:</label>
			<input type="password" name="cmdp" required>
		</div>

		<div class="button">
			<button type="submit" name="inscrit"><b>Envoyer</b></button>
		</div>

	</form>

</div>

{/block}
