<?php

    require_once('includes/db.php');
    require_once('includes/header.php');

    if($_GET['p']){
        require_once('pages/'.$_GET['p'].'.php');
    }

    require_once('includes/footer.php');
?>