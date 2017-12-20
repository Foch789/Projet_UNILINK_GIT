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

    $tpl_dir = "application/views/";
    $tpl = 'modules/'.$current_page.".tpl";
    if (file_exists("$tpl_dir"."$tpl")) {
        $smarty = new Smarty();
        $smarty->caching = 0;
        $smarty->setTemplateDir($tpl_dir);
        foreach ($data as $key => $value) {
            $smarty->assign($key, $value);
        }
        $smarty->display($tpl);
    }
