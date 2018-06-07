<?php
    session_start();
	$host = 'localhost';
	$dbname = 'thdfemci_rig';
	$user = 'thdfemci_todo';
	$pass = 'advancedweb1';

	try {
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        

	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
