{extends file="../master.tpl"}

{block name= "css"}
<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}


{block name="body"}

<div class="page">
    <div class="coter">

        <div class="NomPersonne">

            <h1>{$nom} </h1>
            <h2>{$prenom} </h2>

        </div>

        <div class="menuProfil">
            <ul>
                <li ><a href="{site_url('Admin/view_admin/')}{$user_id_co}"><b>Les étudiants</b></a></li>
            </ul>
        </div>

    </div>

	<div class="centre">

		<h1>Admin</h1>

		<table>
			<tr>
				<th> Compétences</th>
        <th> Promo</th>
				<th> Supprimer</th>
			<tr>
			{foreach $comp as $value}
      {foreach $value[0] as $key}
      <tr>
				<td> {$key['intitule_comp']}</td>
        <td> {$value[1]}</td>
				<td><button class="button">Supprimer</button></td>
			<tr>
      {/foreach}
      {/foreach}
      <tr>
        <td> Ajouter competence</td>
        <tr>

		</table>

	</div>


</div>

{/block}
