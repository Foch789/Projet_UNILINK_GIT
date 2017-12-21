{extends file="../layout.tpl"}

{block name= "css"}
{/block}

{block name="body"}

<div class="page">
<div class="coter">

<a href='?page=logout'>FIN</a>


<h1> {$nom} </h1>
<h2> {$prenom} </h2>

	<ul>
		<li ><a href="#"><b>Personne qui ont besoin de toi </b></a></li>
		<li ><a href="#"><b>Personne que tu aides </b></a></li>
		<li><a href="#"><b>Personnes qui t'aident </b></a></li>
		<li ><a href="#"><b>Personnes dont tu as besoin</b></a></li>
	</ul>
</div>

<div class="centre">
</div>


{/block}
