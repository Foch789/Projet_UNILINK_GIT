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


<form>

{*la vous faire un foretch compétence patati *}
  <p>C++:</p>
  <div>
    <input type="radio" id="note1"
     name="contact" value="1">
    <label for="note1">1</label>

    <input type="radio" id="note2"
     name="contact" value="2">
    <label for="note2">2</label>

    <input type="radio" id="note3"
     name="contact" value="3">
    <label for="note3">3</label>

	<input type="radio" id="note4"
     name="contact" value="4">
    <label for="note4">4</label>

	<input type="radio" id="note5"
     name="contact" value="5">
    <label for="note5">5</label>


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
