{extends file="../../master.tpl"}

{block name= "css"}
<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}


{block name="body"}

<div class="page">
<div class="coter">

{if $user_id_co === $id}
		{* <h1>Oui c'est toi !!!!!</h1> *}
{/if}

	<ul>
		<li ><a href="{site_url('Profil/view/')}{$user_id_co}"><b>Retour profil</b></a></li>
	</ul>
</div>



<div class="centre">

<h1>Personne que tu aide </h1>

</div>






</div>

{/block}
