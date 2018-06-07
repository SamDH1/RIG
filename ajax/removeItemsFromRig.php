<?php
    require_once('../includes/db.php');

    if ($_POST['rdelete']) {
        $query = "DELETE FROM bike_builds WHERE rig_id = :rdelete";
        $result = $DBH->prepare($query);
        $result->bindParam(':rdelete', $_POST['rdelete']);
        $result->execute();
        
        echo $_POST['rig_id'];
    }
?>
