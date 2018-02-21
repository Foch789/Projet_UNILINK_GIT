{extends file="../master.tpl"}

{block name= "css"}
<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}


{block name="body"}

<div class="page">
<div class="coter">
	{* {if $data['user_id_co'] === $data['id']}
		<h1>Oui c'est toi !!!!!</h1>
	{/if} *}
<h1>{$data['nom']} </h1>
<h2>{$data['prenom']} </h2>



	<ul>
		<li ><a href="#"><b>Personne qui ont besoin de toi </b></a></li>
		<li ><a href="#"><b>Personne que tu aide </b></a></li>
		<li><a href="#"><b>Personne qui t'aident </b></a></li>
		<li ><a href="#"><b>Personne dont tu a besoin</b></a></li>
	</ul>
</div>

<div class="centre">


</div>






</div>

{/block}
