{extends file="../master.tpl"}

{block name= "css"}
<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}


{block name="body"}

<div class="page">



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
