<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="asset/css/style2.css"/>
		{block name= "css"}{/block}
		<link rel="shortcut icon" href="https://ent.univ-amu.fr/uPortal/favicon.ico" type="image/x-icon">
	</head>

	<header class="header">
		{include file='layout/layout_entete.inc.tpl'}
	</header>

	{if $page eq 'profil' }
		<nav>
			{include file='nav/nav.inc.tpl'}

		</nav>
	{/if}

	<body>

			{block name="body"}{/block}

	</body>

	<footer class= "foot">

		{include file='layout/layout_pied.inc.tpl'}

	</footer>

</html>
