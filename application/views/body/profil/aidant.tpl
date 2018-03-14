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
			<ul>
				<li ><a href="{site_url('Profil/view/')}{$user_id_co}"><b>Retour profil</b></a></li>
			</ul>
		</div>
	</div>



	<div class="centre">

		<h1>Personne qui t'aident</h1>

		<table>
			<tr>
				<th> Nom étudient </th>
				<th> Matière </th>
			<tr>
			{*metre le for ech *}
			<tr>
				<td> {*variable smarty *} TOTO</td>
				<td> C++ </td>
			<tr>
			<tr>
				<td> {*variable smarty *} TOTO</td>
				<td> html</td>
			<tr>
			<tr>
				<td> {*variable smarty *} TOTO</td>
				<td> C++ </td>
			<tr>

		</table>


	</div>


</div>

{/block}
