<?php
	if(!$_SESSION['loggedin']){
		//User is not logged in
		echo "<h1>Access Denied</h1>";
		echo "<script> window.location.assign('index.php?p=login'); </script>";
		exit;
	}
?>
<div id="pageContainer" class="container-fluid">
     <div class=”card-body”>
	<h1>Edit your profile</h1>
	<p>Complete the below form to update your profile!</p>

	<?php

    		if(isset($_POST['submit'])){

                if($_FILES['profile_image']["name"]){
				//Let's add a random string of numbers to the start of the filename to make it unique!

				$newFilename = md5(uniqid(rand(), true)).$_FILES["profile_image"]["name"];
				$target_file = "./user_images/" . basename($newFilename);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

				// Check if image file is a actual image or fake image
			    $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
			    if($check === false) {
			        echo "File is not an image!";
			        $uploadError = true;
			    }

			    //Check file exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadError = true;
				}

				// Check file size
				if ($_FILES["profile_image"]["size"] > 5000000) {
				    echo "Sorry, your file is too large.";
				    $uploadError = true;
				}

				// File formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadError = true;
				}

				// Error
				if ($uploadError) {
				    echo "Sorry, your file was not uploaded.";
				} else {
					//Save file
				    if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
				        //Success!
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}
			}

    			if($target_file){
    				$query = "UPDATE users SET user_forename = :forename, user_country = :country, user_hobbies = :hobbies, user_gender = :gender, user_favorite_quote = :favorite_quote, user_favorite_colour = :favorite_colour, user_profile_image = :profile_image WHERE user_id = :userid";
    			}else{
    				$query = "UPDATE users SET user_forename = :forename, user_country = :country, user_hobbies = :hobbies, user_gender = :gender, user_favorite_quote = :favorite_quote, user_favorite_colour = :favorite_colour WHERE user_id = :userid";
    			}
    		    $result = $DBH->prepare($query);
    		    $result->bindParam(':forename', $_POST['name']);
    		    $result->bindParam(':country', $_POST['country']);
    		    $result->bindParam(':hobbies', $_POST['hobbies']);
    		    $result->bindParam(':gender', $_POST['gender']);
    		    $result->bindParam(':favorite_quote', $_POST['quote']);
    		    $result->bindParam(':favorite_colour', $_POST['colour']);
    		    if($target_file){
    				$result->bindParam(':profile_image', $newFilename);
    			}
    		    $result->bindParam(':userid', $_SESSION['userData']['user_id']);
    		    if($result->execute()){
    		    	echo '<div class="alert alert-success" role="alert">Your profile has been updated!</div>';
    		    }
    		}

    		//Get current values
    		$query = "SELECT * FROM users WHERE user_id = :userid";
    	    $result = $DBH->prepare($query);
    	    $result->bindParam(':userid', $_SESSION['userData']['user_id']);
    	    $result->execute();

    	    $userProfile = $result->fetch(PDO::FETCH_ASSOC);

    	?>

    	<form method="post" action="" enctype="multipart/form-data">
    		<div class="form-group">
    			<label for="name">Name</label>
    			<input type="text" class="form-control" id="name" name="name" value="<?php echo $userProfile['user_forename']; ?>">
    		</div>
    		<div class="form-group">
    			<label for="profile_image">Photo of your Bike</label>
    			<input type="file" name="profile_image" id="profile_image">
    			<p class="help-block">Upload a photo of your bike for your profile.</p>
    		</div>
    		<div class="form-group">
    			<label for="gender">Gender</label>
    			<input type="text" class="form-control" id="gender" name="gender" value="<?php echo $userProfile['user_gender']; ?>">
    		</div>
    		<div class="form-group">
    			<label for="country">Country</label>
    			<input type="text" class="form-control" id="country" name="country" value="<?php echo $userProfile['user_country']; ?>">
    		</div>
    		<div class="form-group">
    			<label for="quote">Favorite Quote</label>
    			<input type="text" class="form-control" id="quote" name="quote" value="<?php echo $userProfile['user_favorite_quote']; ?>">
    		</div>
            
            <!-- Add the Riding Discipline -->
    		<div class="form-group">
    			<label for="hobbies">Riding Discipline</label>
    			<input type="text" class="form-control" id="hobbies" name="hobbies" value="<?php echo $userProfile['user_hobbies']; ?>">
    		</div>
    		<button type="submit" name="submit" class="btn btn-default">Update Profile</button>
    	</form>
      </div>
</div>
