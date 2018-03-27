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
				<th> </th>
			<tr>
			{foreach $comp as $value}
      {foreach $value[0] as $key}
      <tr>
				<td> {$key['intitule_comp']}</td>
        <td> {$value[1]}</td>
				<td><button class="button" onclick="myFunction('{$key['intitule_comp']}',{$key['id_comp']})">Supprimer</button> </td>
			<tr>
      {/foreach}
      {/foreach}
      <tr>

        <form action="" method="post">

      			<td> <label for="Nom">Ajouter competence</label></td>
      			<td> <input type="text" name="comp" placeholder="Nouvelle compétence" required>
          <label for="Promos">Promos:</label>
      			<select name="id_promo" placeholder=" Promos" required>
      							<option> None
      							<option value="1"> INFO 1</option>
      							<option value="2"> INFO 2</option>
      							<option value="3"> MMI 1</option>
      							<option value="4"> MMI 2</option>
      					</select></td>
            <td>
        			<button class="button" type="submit" name="form_comp"><b>Envoyer</b></button>
        	</td>
        </form

        <tr>

		</table>

	</div>


</div>

<script>
function myFunction(comp, id) {
  var r = confirm('Etes-vous sûr de supprimer '+ comp);
  if (r == true)
  {
    window.open("{site_url('Admin/supprimerComp/')}"+id,"_self")
  }
}
</script>

{/block}
