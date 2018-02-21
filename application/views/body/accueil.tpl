{extends file="../master.tpl"}

{block name= "css"}
	<link rel="stylesheet" href= "{base_url('asset/css/style.css')}" />{*"asset/css/style.css"*}
{/block}

{block name="body"}

<div class="page">

	<div class="containment">

		<h1>Unilink </h1>
		<h2>RÉSEAU SOCIAL DE L’UNIVERSITÉ D'AIX-MARSEILLE</h2>

		<a href= "{site_url('Recherche')}" id="icon"><img src="{base_url('asset/img/chevron-arrow-down.png')}"/></a>

	</div>

</div>

{/block}
