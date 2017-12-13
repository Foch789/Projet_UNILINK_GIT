<?php 
	require_once ('config.inc.php');
	require_once('./application/libraries/smarty/libs/Smarty.class.php');
	
	
	$current_page= ''; 
	
	if (isset($_GET['page']))
	{
		$current_page= $_GET['page'];
	}

	
	if ($current_page=='')
	{
		echo 'Erreur 404';
	}
	else if (!isset($_PAGES[$current_page]))
	{
		echo 'Erreur 404';
	}
	else 
	{
		include './application/modules/'.$_PAGES[$current_page].'.inc.php';
		
		$smarty = new Smarty;
		$smarty->assign("data", $data);
		$smarty->display('./application/views/modules/'.$current_page.'.tpl');
	}
?>