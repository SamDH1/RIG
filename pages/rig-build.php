<?php
if(!$_SESSION['loggedin']){
    //User is not logged in
    echo "<h1>Access Denied</h1>";
    echo "<script> window.location.assign('index.php?p=login'); </script>";
    exit;
}
?>


<script src="js/rigAdd.js"></script>

<div id="pageContainer" class="container-fluid">


    <div style="text-align: center; margin-top: 32px; margin-bottom: 32px">
        

            <?php
            $frameid = $_GET['id'];
            $query = "SELECT * FROM rig WHERE frame_id = :frameid";
            $pdo = $DBH->prepare($query);
            $pdo->bindParam(':frameid', $frameid);
            $pdo->execute();

            while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                echo '<h1>Build your '.$row['frame_name'].'</h1>';
                echo '<p hidden id="frame">'.$row['frame_name'].'</p>';
            }

            ?>
        
        <?php
        $query = "SELECT * FROM users WHERE user_id = :userid";
        $result = $DBH->prepare($query);
        $result->bindParam(':userid', $_SESSION['userData']['user_id']);
        $result->execute();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            
            echo '<p hidden id="userid">'.$row['user_id'].'</p>';
        }
            ?>




        
        <p>Click save to keep it for later use</p>

        <form class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <input type="text" class="form-control" style="border-radius: 319px;" id="name" placeholder="Name Your RIG">
            </div>
            <div class="col-2"></div>


            <!-- <button type="button" class="btn btn-primary" id="addproduct">Add Item</button> -->


        </form>
    </div>




    <script>
        $(document).ready(function(){
            $("#frameInfo").click(function(){
                $("#frameDetails").toggle();
            });
        });
    </script>


    


        <div class="row" style="padding-left: 15px;">
            
        <!-- *********************************************  FRAME COLOUR    -->
            
            <h2>Frame Colour</h2>
            <span style="width: 5px;"></span>
            <i id="frameInfo" class="fa fa-info-circle" style="font-size:24px"></i>

        </div>



        <div>
            <p id="frameDetails" style="display: none;">Pick your favourite colourway for the bike frame.</p>
        </div>

        <div class="row" style="margin-bottom: 32px;">


            <?php
            $frameid = $_GET['id'];
            $query = "SELECT bikeColour.colour_img , bikeColour.colour_desc FROM ((colours INNER JOIN bikeColour ON colours.bikeColour_id =  bikeColour.bikeColour_id) INNER JOIN rig on colours.frame_id = rig.frame_id) WHERE rig.frame_id = :frameid";
            $pdo = $DBH->prepare($query);
            $pdo->bindParam(':frameid', $frameid);
            $pdo->execute();

            while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {


                echo '<div class="col-md-4">

            <label>
                <input type="radio" name="colour" id="colour" value="'.$row['colour_desc'].'"/>
                    <div class="rigCards cardSelect">

                        <div class="card-body">
                        <h3 class="card-text">'.$row['colour_desc'].'</h3>
                    </div>

                    <img class="rigImage" style src="img/'.$row['colour_img'].'" alt="Card image">

            </div>
            </label>
        </div>';

            } ?>

        </div>

        <script>
            $(document).ready(function(){
                $("#forkInfo").click(function(){
                    $("#forkDetails").toggle();
                });
            });
        </script>

            <!-- *********************************************  FORK    -->


            <div class="row" style="padding-left: 15px;">
                <h2>Fork</h2>
                <span style="width: 5px;"></span>
                <i id="forkInfo" class="fa fa-info-circle" style="font-size:24px"></i>

            </div>

            <div>
                <p id="forkDetails" style="display: none;">Each of the forks below have been pre-configured to fit and use the ideal travel with the frame which you have selected. The fork is located on the front of the bike, loaded with travel for suspension. Travel is the amount of suspension that is available on the bike. Longer travel means bigger drops.</p>
            </div>


            <div class="row" style="margin-bottom: 32px;">


                <?php
                $frameid = $_GET['id'];
                $query = "SELECT forkID.fork_img , forkID.fork_name FROM ((bikeForks INNER JOIN forkID ON bikeForks.fork_id =  forkID.fork_id) INNER JOIN rig on bikeForks.frame_id = rig.frame_id) WHERE rig.frame_id = :frameid";
                $pdo = $DBH->prepare($query);
                $pdo->bindParam(':frameid', $frameid);
                $pdo->execute();

                while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {


                    echo '<div class="col-md-4">

        <label>
                    <input type="radio" name="fork" id="fork" value="'.$row['fork_name'].'"/>
            <div class="rigCards cardSelect">

                <div class="card-body">
                    <h3 class="card-text">'.$row['fork_name'].'</h3>
                </div>

                    <img class="rigImage"  src="img/'.$row['fork_img'].'" alt="Card image">


                
            </div>
            </label>
        </div>';

                } ?>

            </div>

            <div class="row" style="padding-left: 15px;">
                
                
                <script>
            $(document).ready(function(){
                $("#shockInfo").click(function(){
                    $("#shockDetails").toggle();
                });
            });
        </script>
                
                
                <!-- *********************************************  SHOCK    -->
                
                
                <h2>Shock</h2>
                <span style="width: 5px;"></span>
                <i id="shockInfo" class="fa fa-info-circle" style="font-size:24px"></i>

            </div>

            <div>
                <p id="shockDetails" style="display: none;">Each of the shocks below have been pre-configured to fit and use the ideal travel with the frame which you have selected. The shock is located at the middle of the frame. The shock usually comes with air as the dampining media. The larger the amount of travel, the bigger you can drop.</p>
            </div>

            <div class="row" style="margin-bottom: 32px;">


                <?php
                $frameid = $_GET['id'];
                $query = "SELECT shockID.shock_img , shockID.shock_name FROM ((bikeShock INNER JOIN shockID ON bikeShock.shock_id =  shockID.shock_id) INNER JOIN rig on bikeShock.frame_id = rig.frame_id) WHERE rig.frame_id = :frameid";
                $pdo = $DBH->prepare($query);
                $pdo->bindParam(':frameid', $frameid);
                $pdo->execute();

                while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {


                    echo '<div class="col-md-4">

        <label>
                    <input type="radio" name="shock" id="shock" value="'.$row['shock_name'].'"/>
            <div class="rigCards cardSelect">

                <div class="card-body">
                    <h3 class="card-text">'.$row['shock_name'].'</h3>
                </div>

                    <img class="rigImage"  src="img/'.$row['shock_img'].'" alt="Card image">


                
            </div>
            </label>
        </div>';

                } ?>

            </div>

            <div class="row" style="padding-left: 15px;">
                
                
                
                <script>
            $(document).ready(function(){
                $("#drivetrainInfo").click(function(){
                    $("#drivetrainDetails").toggle();
                });
            });
        </script>
                
                
                <!-- *********************************************  DRIVETRAIN    -->
                
                <h2>Drivetrain</h2>
                <span style="width: 5px;"></span>
                <i id="drivetrainInfo" class="fa fa-info-circle" style="font-size:24px"></i>

            </div>

            <div>
                <p id="drivetrainDetails" style="display: none;">Each of the drivetrain setups below have been pre-configured to fit the frames dimensions. The drivetrain consists of multiple parts, but best to be built with the same model throughout for maximum reliability. The chain, deraileur, chain rings, bottom bracket and crank arms are all part of the drivetrain system.</p>
            </div>

            <div class="row" style="margin-bottom: 32px;">


                <?php
                $frameid = $_GET['id'];
                $query = "SELECT drivetrainID.drivetrain_img , drivetrainID.drivetrain_name FROM ((bikeDrivetrain INNER JOIN drivetrainID ON bikeDrivetrain.drivetrain_id =  drivetrainID.drivetrain_id) INNER JOIN rig on bikeDrivetrain.frame_id = rig.frame_id) WHERE rig.frame_id = :frameid";
                $pdo = $DBH->prepare($query);
                $pdo->bindParam(':frameid', $frameid);
                $pdo->execute();

                while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {


                    echo '<div class="col-md-4">

        <label>
                    <input type="radio" name="drivetrain" id="drivetrain" value="'.$row['drivetrain_name'].'"/>
            <div class="rigCards cardSelect">

                <div class="card-body">
                    <h3 class="card-text">'.$row['drivetrain_name'].'</h3>
                </div>

                    <img class="rigImage"  src="img/'.$row['drivetrain_img'].'" alt="Card image">


                
            </div>
            </label>
        </div>';

                } ?>

            </div>

            <div class="row" style="padding-left: 15px;">
                
                <script>
            $(document).ready(function(){
                $("#brakesInfo").click(function(){
                    $("#brakesDetails").toggle();
                });
            });
        </script>
                
                <!-- *********************************************  BRAKES    -->
                
                <h2>Brakes</h2>
                <span style="width: 5px;"></span>
                <i id="brakesInfo" class="fa fa-info-circle" style="font-size:24px"></i>

            </div>

            <div>
                <p id="brakesDetails" style="display: none;">Each of the brakes below have been pre-configured to fit and have the correct form and level of stopping power with the frame which you have selected. There is a front and rear brake, fitted with a lever, which is what you pull, and the calliper, which is what stops the bike.</p>
            </div>

            <div class="row" style="margin-bottom: 32px;">


                <?php
                $frameid = $_GET['id'];
                $query = "SELECT brakesID.brakes_img , brakesID.brakes_name FROM ((bikeBrakes INNER JOIN brakesID ON bikeBrakes.brakes_id =  brakesID.brakes_id) INNER JOIN rig on bikeBrakes.frame_id = rig.frame_id) WHERE rig.frame_id = :frameid";
                $pdo = $DBH->prepare($query);
                $pdo->bindParam(':frameid', $frameid);
                $pdo->execute();

                while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {


                    echo '<div class="col-md-4">

        <label>
                    <input type="radio" name="brakes" id="brakes" value="'.$row['brakes_name'].'"/>
            <div class="rigCards cardSelect">

                <div class="card-body">
                    <h3 class="card-text">'.$row['brakes_name'].'</h3>
                </div>

                    <img class="rigImage"  src="img/'.$row['brakes_img'].'" alt="Card image">


                
            </div>
            </label>
        </div>';

                } ?>

            </div>

            <div class="row" style="padding-left: 15px;">
                
                <script>
            $(document).ready(function(){
                $("#wheelsInfo").click(function(){
                    $("#wheelsDetails").toggle();
                });
            });
        </script>
                
                <!-- *********************************************  WHEELS    -->
                
                <h2>Wheels</h2>
                <span style="width: 5px;"></span>
                <i id="wheelsInfo" class="fa fa-info-circle" style="font-size:24px"></i>

            </div>

            <div>
                <p id="wheelsDetails" style="display: none;">Each of the wheels below have been pre-configured to fit and supply the ideal width and size for your frame. Wheels come in 3 size; 26", 27.5" and 29". The bigger, the more stable and speed, but less agile. 27.5" is usually the ideal size.</p>
            </div>

            <div class="row" style="margin-bottom: 32px;">


                <?php
                $frameid = $_GET['id'];
                
                
                $query = "SELECT wheelsID.wheels_img , wheelsID.wheels_name FROM ((bikeWheels INNER JOIN wheelsID ON bikeWheels.wheels_id =  wheelsID.wheels_id) INNER JOIN rig on bikeWheels.frame_id = rig.frame_id) WHERE rig.frame_id = :frameid";
                $pdo = $DBH->prepare($query);
                $pdo->bindParam(':frameid', $frameid);
                $pdo->execute();

                while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {


                    echo '<div class="col-md-4">

        <label>
                    <input type="radio" name="wheels" id="wheels" value="'.$row['wheels_name'].'"/>
            <div class="rigCards cardSelect">

                <div class="card-body">
                    <h3 class="card-text">'.$row['wheels_name'].'</h3>
                </div>

                    <img class="rigImage"  src="img/'.$row['wheels_img'].'" alt="Card image">


                
            </div>
            </label>
        </div>';

                } ?>

            </div>

            <div class="row">
                <div class="col-md-10">

                </div>
                <div class="col-md-2">
                    
                    <button onclick="location.href='http://sampulman.worcestercomputing.com/rig/index.php?p=dashboard'" type="button" class="btn btn-primary" style="background-color: #7dc169" id="save">SAVE YOUR RIG</button>
                </div>
            </div>


            </div>