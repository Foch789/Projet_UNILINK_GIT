<ul  class= "co">
		{if $is_connected eq true }
			<li><a href="?page=logout"><b>Deconnexion</b></a></li>
		{else}
			<li><a href="{base_url('Connection')}"><b>Connexion</b></a></li>
		{/if}

		<li style="float:left" ><a href="?page=accueil"><img src="asset/img/logoU.png"/></a></li></div>

</ul>
