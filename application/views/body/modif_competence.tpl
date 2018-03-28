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

 <form action="" method="post">

  <table>
			<tr>
				<th> Matière </th>
        <th> Niveau Actuelle</th>
				<th> Niveau</th>
      <tr>
          {foreach $comp_active as $key}
          <tr>
            <td> {$key['intitule_comp']}</td>
            <td> {$key['niveau']}</td>
            <td><input type="number" name="{$key['intitule_comp']}" min="0" max="5" value={$key['niveau']}></td>
          <tr>
        {/foreach}

         {foreach $comp_non_active as $key => $value}
          <tr class="grey">
            <td> {$value['intitule_comp']}</td>
            <td> Aucun</td>
            <td><input type="number" name="{$value['intitule_comp']}" value=0 min="0" max="5"></td>
          <tr>
        {/foreach}
        <tr>
          <td colspan="2">  </td>
  				<td>
              <button class="button" type="submit" name="form_comp" >Envoyer</button>
  				</td>
  			<tr>

		</table>

  </form>

  <p>
    La zone grise signifie que tu n'as pas rempli cette compétence
  </p>

  </div>

</div>

</div>

{/block}
