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

    <h1>Competence </h1>

Ajouter compétence /
Modification compétence

<form>

{*la vous faire un foretch compétence patati *}
  <table>
			<tr>
				<th> Matière </th>
				<th> Niveau</th>
			<tr>
			{*metre le for ech *}
			<tr>
				<td> C++ </td>
				<td> 
					<form>
					  <fieldset>
						<span class="star-cb-group">
						  <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
						  <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
						  <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
						  <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
						  <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
						  <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
						</span>
					  </fieldset>
					</form>
				</td>
			<tr>
			<tr>
				<td> HTML</td>
				<td> 
					<form>
					  <fieldset>
						<span class="star-cb-group">
						  <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
						  <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
						  <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
						  <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
						  <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
						  <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
						</span>
					  </fieldset>
					</form>
				</td>
			<tr>
			<tr>
				<td>JAVA </td>
				<td> 
					
				</td>
			<tr>

		</table>
    


  </div>
  <div>
    <button type="submit">Envoyer</button>
  </div>
</form>


</div>






</div>

{/block}
{*{extends file="../master.tpl"}

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

    <h1>Competence </h1>

    <div id="myDIV" class="header">
      <h2>My To Do List</h2>
      <input type="text" id="myInput" placeholder="Title...">
      <span onclick="newElement()" class="addBtn">Add</span>
    </div>

    <ul id="myUL">
      <li>Hit the gym</li>
      <li class="checked">Pay bills</li>
      <li>Meet George</li>
      <li>Buy eggs</li>
      <li>Read a book</li>
      <li>Organize office</li>
    </ul>

</div>



<script src="{base_url('js/index.js')}"></script>

</div>

{/block}
*}
