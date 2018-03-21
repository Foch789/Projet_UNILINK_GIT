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
                <li ><a href="{site_url('Profil/view/')}{$user_id_co}"><b>Retour profil</b></a></li>
                <li ><a href="{site_url('Profil/view_admin/')}{$user_id_co}"><b>Les étudiants</b></a></li>
            </ul>
        </div>

    </div>

	<div class="centre">

		<h1>Admin</h1>

		<table>
			<tr>
				<th> Compétences</th>
				<th> Supprimer</th>
			<tr>
			{*metre le for ech *}
			<tr>
				<td> {*variable smarty *} TOTO</td>
				<td><button class="button">Supprimer</button></td>
			<tr>
			<tr>
				<td> {*variable smarty *} TOTO</td>
				<td><button class="button">Supprimer</button></td>
			<tr>
			<tr>
				<td> {*variable smarty *} TOTO</td>
				<td><button class="button">Supprimer</button></td>
			<tr>
      <tr>
  			     <td><button class="button">Ajouter compétence</button></td>
  		<tr>

		</table>

	</div>


</div>

{/block}
