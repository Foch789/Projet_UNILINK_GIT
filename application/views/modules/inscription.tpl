{extends file="../layout.tpl"}
{block name= "css"}
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
			<input type="text" id="email" name="user_name" required>
		</div>

		<div>
			<label for="mdp">Mot de passe :</label>
			<input type="password" id="mdp" name="mdp" required>
		</div>

		<div>
			<label for="mdpc">Confirmation:</label>
			<input type="password" id="mdpc" name="mdpc" required>
		</div>

		<div class="button">
			<button type="submit"><b>Envoyer</b></button>
		</div>

	</form>

</div>

{/block}
