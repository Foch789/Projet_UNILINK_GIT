<ul class="co">
	{if $logged_in === true}
		<li><a href="{site_url('Connexion/deconnexion')}"><b>Deconnexion</b></a></li>
			{if $admin === true}
				{if $etu === true}
						<li><a href="{site_url('Admin/view_admin/')}{$user_id_co}"><b>Mon profil</b></a></li>
						{else }
						{if $user_id_co != $id}
							<li><a href="{site_url('Admin/view_admin/')}{$user_id_co}"><b>Mon profil</b></a></li>
						{/if}
				{/if}
				{else}
					{if $user_id_co != $id}
						<li><a href="{site_url('Profil/view/')}{$user_id_co}"><b>Mon profil</b></a></li>
					{/if}
			{/if}

	{else}
		<li><a href="{site_url('Connexion')}"><b>Connexion</b></a></li>
		<li><a href="{site_url('Inscription')}"><b>Inscription</b></a></li>
	{/if}

	<li style="float:left"><a href="{site_url('Home')}"><img src="{base_url('asset/img/home.png')}"/></a></li>
	</div>

</ul>
