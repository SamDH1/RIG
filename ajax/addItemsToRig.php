<?php
require_once('../includes/db.php');
    
if($_POST['userID'] && $_POST['rigName']){    
    $query = "INSERT INTO bike_builds (user_id, rig_name, bike_id, colour_id, fork_id, shock_id, wheels_id, drivetrain_id, brakes_id) VALUES (:userID, :rigName, :frameName, :colourName, :forkName, :shockName, :wheelsName, :drivetrainName, :brakesName)";
    $result = $DBH->prepare($query);
    $result->bindParam(':userID', $_POST['userID']);
    $result->bindParam(':frameName', $_POST['frameName']);
    $result->bindParam(':colourName', $_POST['colourName']);
    $result->bindParam(':forkName', $_POST['forkName']);
    $result->bindParam(':shockName', $_POST['shockName']);
    $result->bindParam(':wheelsName', $_POST['wheelsName']);
    $result->bindParam(':drivetrainName', $_POST['drivetrainName']);
    $result->bindParam(':brakesName', $_POST['brakesName']);
    $result->bindParam(':rigName', $_POST['rigName']);
    $result->execute();
}
    

 
?>
