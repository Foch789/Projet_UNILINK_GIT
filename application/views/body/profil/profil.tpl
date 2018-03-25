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

        {if $user_id_co === $id}
            <div class="menuProfil">
                <ul>
                    <li ><a href="{site_url('Profil/view_modif_comp/')}{$user_id_co}"><b>Modifier ses compétences</b></a></li>
                    <li ><a href="{site_url('Profil/view_besoin_aide/')}{$user_id_co}"><b>Personne qui ont besoin de toi </b></a></li>
                    <li ><a href="{site_url('Profil/view_aide/')}{$user_id_co}"><b>Personne que tu aide </b></a></li>
                    <li><a href="{site_url('Profil/view_aidant/')}{$user_id_co}"><b>Personne qui t'aident </b></a></li>
                    <li ><a href="{site_url('Profil/view_besoin_aidant/')}{$user_id_co}"><b>Personne dont tu a besoin</b></a></li>
                </ul>
            </div>
        {/if}
    </div>

	<div class="centre">
        {if $user_id_co === $id}
		  <h1>Tes Compétences </h1>
        {else}
            <h1>Compétances </h1>
        {/if}
		<table>
			<tr>
				<th> Matière </th>
				<th> Niveau</th>
			<tr>
			{*metre le for ech *}
			<tr>
				<td> C++ </td>
				<td></td>
			<tr>
			<tr>
				<td> HTML</td>
				<td></td>
			<tr>
			<tr>
				<td> C++ </td>
				<td></td>
			<tr>

		</table>


	</div>

</div>

{/block}
