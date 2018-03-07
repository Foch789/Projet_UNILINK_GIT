{extends file="../master.tpl"}

{block name= "css"}
<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}


{block name="body"}

<div class="page">
<div class="coter">

    

    <div class="NomPersonne">
        {if $user_id_co === $id}
            <h1>Oui c'est toi !!!!!</h1>
        {/if}
        <h1>{$nom} </h1>
        <h2>{$prenom} </h2>
    </div>

    <div class="menuProfil">
    

	<ul>
		<li ><a href="{site_url('Profil/view/')}{$user_id_co"><b>Personne qui ont besoin de toi </b></a></li>
		<li ><a href="{site_url('Profil/view/')}{$user_id_co"><b>Personne que tu aide </b></a></li>
		<li><a href="{site_url('Profil/view/')}{$user_id_co"><b>Personne qui t'aident </b></a></li>
		<li ><a href="{site_url('Profil/view/')}{$user_id_co"><b>Personne dont tu a besoin</b></a></li>
	</ul>
        
        
    </div>
</div>



<div class="centre">


</div>






</div>

{/block}
