<ul  class= "co">
		{if $is_connected eq true }
			<li><a href="?page=logout"><b>Deconnexion</b></a></li>
		{else}
			<li><a href="{site_url('Connection')}"><b>Connexion</b></a></li>
			<li><a href="{site_url('Inscription')}"><b>Inscription</b></a></li>
		{/if}

		<li style="float:left" ><a href="{site_url('Home')}"><img src="{base_url('asset/img/logoU.png')}"/></a></li></div>

</ul>
