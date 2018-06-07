<?php
if(!$_SESSION['loggedin']){
    //User is not logged in
    echo "<h1>Access Denied</h1>";
    echo "<script> window.location.assign('index.php?p=login'); </script>";
    exit;
}


if($_POST['name']){
    $query = "INSERT INTO `lists` (`list_id`, `user_id`, `list_name`) VALUES (NULL, :userid, :listname);";

    $result = $DBH->prepare($query);
    $result->bindParam(':userid', $_SESSION['userData']['user_id']);
    $result->bindParam(':listname', $_POST['name']);
    $result->execute();

    echo "Done - Magic!";
}
?>

<script src="js/rigDelete.js"></script>


<div id="pageContainer" class="container-fluid" >
    <div class="card-body">
        <h1>Welcome to RIG!</h1>
        <div class="row">
            <h3 style="padding-left: 15px;">Your Details</h3>
            <a style="margin-left: 32px"class="btn danger" href="index.php?p=editprofile" >Edit Profile</a>
        </div>
        <?php
        $query = "SELECT * FROM users WHERE user_id = :userid";
        $result = $DBH->prepare($query);
        $result->bindParam(':userid', $_SESSION['userData']['user_id']);
        $result->execute();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {



            echo '<p>Your Name: '.$row['user_forename'].' '.$row['user_lastname'].'</p>';

            echo '<p>Your Email Address: '.$row['user_email'].'</p>';

            if ($row['user_mobile'] < 1){

                echo '<p>Your Mobile Number: No Mobile Number Supplied</p>';
            } else 
            {

                echo '<p>Your Mobile Number: 0'.$row['user_mobile'].'</p>';
            }


            //checking to see if the quote is empty or not
            if ($row['user_favorite_quote'] < ''){

                echo '<p>Favourite Quote: You have no favourite quote!</p>';
            } else 
            {

                echo '<p>Favourite Quote: '.$row['user_favorite_quote'].'</p>';
            }

            if ($row['user_favorite_quote'] < ''){

                echo '<p>Favourite Quote: You have no favourite quote!</p>';
            } else 
            {

                echo '<p>Favourite Quote: '.$row['user_favorite_quote'].'</p>';
            }

            echo '<h3>My RIG</h3>';

            if ($row['user_profile_image'] < ''){

                echo '<p>You have not uploaded your RIG yet, can you can upload a new pucture of your current bike on your <ahref="index.php?p=editprofile">Edit Profile</a> page!</p>';
            } else 
            {

                echo '<img class="profileImage" style="max-width: 400px; max-height: 400px;" src="./user_images/' .$row['user_profile_image'].'"/>';
            }

        } 

        ?>

        <div class="spacer"></div>
        <h3>Below are your previously built bikes</h3>
        



        <?php
        $query = "SELECT bike_img.image FROM bike_img INNER JOIN bike_builds ON bike_img.rig_id=bike_builds.rig_id";
        $result = $DBH->prepare($query);
        $result->bindParam(':userid', $_SESSION['userData']['user_id']);
        $result->execute();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<img src=img/'.$row['image'].' style="max-width: 400px ; max-height: 400px;">';}
        ?>

        
        <?php
            $query = "SELECT * FROM bike_builds WHERE user_id = :userid";
            $result = $DBH->prepare($query);
            $result->bindParam(':userid', $_SESSION['userData']['user_id']);
            $result->execute();

            while($row = $result->fetch(PDO::FETCH_ASSOC)) {

                echo '<div class="card" style="margin-top:32px">
            <div class="card-body">
                <div class="row">
                    <p id="rigid" hidden>'.$row['rig_id'].'</p>
                    <div class="col-2 d-none d-sm-none d-md-block"><img src=img/spartan-carbon-red.png style="max-width: 100px ; max-height: 100px;"></div>
                    <div class="col-10">
                    <h4 class="card-title">'.$row['rig_name'].'</h4>
                    <h6 class="card-subtitle mb-2 text-muted">'.$row['bike_id'].'</h6>
                    <p class="card-text">
                        Fork: '.$row['fork_id'].'<br>Shock: '.$row['shock_id'].'<br>Drivetrain: '.$row['drivetrain_id'].'<br>Brakes: '.$row['brakes_id'].'<br>Wheels: '.$row['wheels_id'].'
                        
                    </p>
                    <button type="button" class="btn btn-primary" style="background-color: #7dc169" id="rig_delete">Delete</button>
                    
                
                        </div>
                </div>
            </div>
        </div>';
            }    ?>


    </div>
</div>
