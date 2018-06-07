<?php
	if(!$_SESSION['loggedin']){
		//User is not logged in
		echo "<h1>Access Denied</h1>";
		echo "<script> window.location.assign('index.php?p=login'); </script>";
		exit;
	}
?>

<div class="card container mt-5">
    <div class="card-body">
        <h1>Welcome to RIG!</h1>
    	<p>Below are your previously built bikes:  (Except here, here is not for that today. Enjoy your own details instead!)</p>

    	<ul>
    	<?php
    	$query = "SELECT * FROM users WHERE user_id = :userid";
    	$result = $DBH->prepare($query);
    	$result->bindParam(':userid', $_SESSION['userData']['user_id']);
    	$result->execute();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            
            echo '<li>Your Name: '.$row['user_forename'].' '.$row['user_lastname'].'</li>';
    		 
            echo '<li>Your Email Address: '.$row['user_email'].'</li>';
            
            if ($row['user_mobile'] < 1){
                
                echo '<li>No Mobile Number Supplied</li>';
            } else 
            {
            
                echo '<li>Your Mobile Number: 0'.$row['user_mobile'].'</li>';
            }
            
    	}
    	?>
    	</ul>
    </div>
</div>
