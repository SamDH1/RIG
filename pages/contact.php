<?php
	require_once("./smarty/Smarty.class.php");
    $smarty = new Smarty();
    $smarty->setTemplateDir('./templates');
    $smarty->setCompileDir('./templates_c');
    $smarty->setCacheDir('./cache');
    $smarty->setConfigDir('./configs');
    $smarty->assign('title',"Contact RIG");
    $smarty->assign('sub',"Get in touch if you have any questions");
    $smarty->display('contact.tpl');
?>