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
      </ul>
    </div>
  </div>

<div class="centre">

    <h1> Modification de tes competence </h1>

<form >

{*la vous faire un foretch compétence patati *}
  <table>
			<tr>
				<th> Matière </th>
        <th> Niveau Actuelle</th>
				<th> Niveau</th>
			<tr>
			{*metre le for ech *}
			<tr class="grey">
				<td> C++ </td>
        <td> 3</td>
				<td>
          <input type="number" name="niveau" min="1" max="5">
				</td>
			<tr>
			<tr>
				<td> HTML</td>
        <td> 5 </td>
				<td >
          <input type="number" name="niveau" min="1" max="5">
				</td>
			<tr>
        <tr>
          <td colspan="2">  </td>
  				<td>
              <button class="button" type="submit">Envoyer</button>
  				</td>
  			<tr>
		</table>
    <p>
      La zone grise signifie que tu n'as pas rempli cette compétence
    </p>
  </div>

</form>


</div>






</div>

{/block}
