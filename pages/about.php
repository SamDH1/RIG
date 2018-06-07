<?php
	require_once("./smarty/Smarty.class.php");
    $smarty = new Smarty();
    $smarty->setTemplateDir('./templates');
    $smarty->setCompileDir('./templates_c');
    $smarty->setCacheDir('./cache');
    $smarty->setConfigDir('./configs');
    $smarty->assign('title',"About RIG");
    $smarty->assign('sub',"Who are we, and what's the plan?");
    $smarty->display('about.tpl');
?>