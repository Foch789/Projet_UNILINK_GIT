{extends file="../../master.tpl"}

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
    {if $user_id_co === $id}
        <ul>
            <li ><a href="{site_url('Profil/view_modif_comp/')}{$user_id_co}"><b>Modifier ses compétences</b></a></li>
            <li ><a href="{site_url('Profil/view_besoin_aide/')}{$user_id_co}"><b>Personne qui ont besoin de toi </b></a></li>
            <li ><a href="{site_url('Profil/view_aide/')}{$user_id_co}"><b>Personne que tu aide </b></a></li>
            <li><a href="{site_url('Profil/view_aidant/')}{$user_id_co}"><b>Personne qui t'aident </b></a></li>
            <li ><a href="{site_url('Profil/view_besoin_aidant/')}{$user_id_co}"><b>Personne dont tu a besoin</b></a></li>
        </ul>
    </div>
</div>

{/if}

<div class="centre">
{if $user_id_co === $id}
<form action="" method="post" class="mise">
	<div class="button">
		<button type="submit" name="mise"><b>Mise à jour</b></button>
	</div>
</form>

{/if}

</div>






</div>

{/block}
