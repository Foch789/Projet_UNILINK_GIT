{extends file="../master.tpl"}

{block name= "css"}
	<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}

{block name="body"}

<div class="containment">

    <div class="rech"> 
        <h1>Vous êtes un professionnel à la recherche d'un stagiaire ?</h1>

        <h2>Trouvez le parmi nos étudiants</h2>
    </div>
	<form action="" method="post" class="formulaire">
	
		<p> 
			<input type="checkbox" id="test1" name="PHP" value="1"> 
			<label for= "test1"> PHP </label>
		
			<input type="checkbox" id="test2"  name="C++" value="2"> 
			<label for= "test2">C++</label>
		
			<input type="checkbox" id="test3"  name="Math" value="3">
			<label for= "test3">Mathematiques</label>			
		
			<input type="checkbox" id="test4" name="Moteur" value="4">
			<label for= "test4">Moteurs 3D</label>
		
			<input type="checkbox" id="test5" name="Algo" value="5"> 
			<label for= "test5">Algorithmique</label>
		
			<input type="checkbox" id="test6"  name="Web" value="6">
			<label for= "test6"> Web</label>
		
			<input type="checkbox" id="test7" name="Systeme" value="7"> 
			<label for= "test7">Système</label>
		
			<input type="checkbox"id="test8"  name="Anglais" value="8">
			<label for= "test8"> Anglais</label>
		
			<input type="checkbox" id="test9" name="PPP" value="9">
			<label for= "test9"> PPP</label>
		
			<input type="checkbox" id="test10" name="Com" value="10"> 
			<label for= "test10">Communication</label>
		</p>
			
			<div class="button">
				<button type="submit" name="form_recherche"><b>Envoyer</b></button>
			</div>

	</form>

	<div class= "listeEtu">
	 {foreach from=$etudiants item=$value key=$key}
	 
	 	<a href="{site_url('Profil/view/')}{$value['id_etu']}">{$value['nom_etu']} {$value['prenom_etu']}</a></br>
	
	{/foreach}
	</div>

</div>

{/block}
