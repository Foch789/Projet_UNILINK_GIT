{extends file="../layout.tpl"}

{block name= "css"}
{/block}


{block name="body"}






<div class="page">
<div class="coter">
<h1> Nom </h1>
<h2>Prénom</h2>

	<ul>
		<li ><a href="#"><b>Personne qui ont besoin de toi </b></a></li>
		<li ><a href="#"><b>Personne que tu aide </b></a></li>
		<li><a href="#"><b>Personne qui t'aident </b></a></li>
		<li ><a href="#"><b>Personne dont tu a besoin</b></a></li>
	</ul>
</div>

<div class="centre">


</div>




		<p>Salut {$monlogin}</p>

	  <a href='?page=logout'>FIN</a>


</div>

{/block}
