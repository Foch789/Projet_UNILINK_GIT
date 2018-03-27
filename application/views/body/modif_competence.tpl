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

  <table>
			<tr>
				<th> Matière </th>
        <th> Niveau Actuelle</th>
				<th> Niveau</th>
			<tr>

		</table>

    <button class="button" type="submit" name="form_recherche"><b>Envoyer</b></button>

  </form>

  <p>
    La zone grise signifie que tu n'as pas rempli cette compétence
  </p>

  </div>

</div>

</div>

{/block}

{* <tr class="grey">
  <td> C++ </td>
  <td> 3</td>
  <td>
    <div class="groupe">
    <label>1</label> <input type="radio" name="niveau" value="1" checked>
    <label>2</label> <input type="radio" name="niveau" value="2">
    <label>3</label> <input type="radio" name="niveau" value="3">
    <label>4</label> <input type="radio" name="niveau" value="4">
    <label>5</label> <input type="radio" name="niveau" value="5">
  </div>
  </td>
<tr> *}
