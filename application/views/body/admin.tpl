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
                <li ><a href="{site_url('Admin/view_comp/')}{$user_id_co}"><b>Les compétences</b></a></li>
            </ul>
        </div>

    </div>

	<div class="centre">

		<h1>Admin</h1>

		<table>
			<tr>
				<th> Nom étudient </th>
			<tr>
			{foreach $resultat as $value}
			<tr>
				<td> <a href="{site_url('Profil/view/')}{$value['id_etu']}">{$value['nom_etu']} {$value['prenom_etu']}</a>
          <button class="button">Mettre en Admin</button> <button class="button">Supprimer</button> </td>
			<tr>
        {/foreach}
		</table>

	</div>


</div>

{/block}
