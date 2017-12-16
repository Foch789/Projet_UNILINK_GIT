<?php
    require_once('config.inc.php');
    require_once('application/Smarty/libs/Smarty.class.php');

    $data = array();

    $current_page = $_GET['page'];

    if (!in_array($current_page, $PAGES)) {
        if ($current_page=='') {
            $current_page=$HOME_PAGE;
        } else {
            echo 'Erreur 404';
            //$current_page=$ERROR_404;
        }
    }

    require_once("application/modules/".$current_page.".inc.php");

    $smarty = new Smarty();
    $smarty->setTemplateDir('application/views/');
    foreach ($data as $key => $value) {
        $smarty->assign($key, $value);
    }
    $smarty->display("modules/".$current_page.".tpl");
