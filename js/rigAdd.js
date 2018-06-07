$(document).ready(function() {

    $('#save').click(function() {

        //adding from new rig
        var frame_brand = document.getElementById("frame").textContent;
        var colour_name = document.querySelector("input[name='colour']:checked").value;
        var fork_name = document.querySelector("input[name='fork']:checked").value;
        var shock_name = document.querySelector("input[name='shock']:checked").value;
        var drivetrain_name = document.querySelector("input[name='drivetrain']:checked").value;
        var wheels_name = document.querySelector("input[name='wheels']:checked").value;
        var brakes_name = document.querySelector("input[name='brakes']:checked").value;
        var rig_name = $('#name').val();
        var userid_input = document.getElementById("userid").textContent;

        //var frame_brand = document.getElementById("frame").textContent;
        //var colour_name = document.getElementById("colour-name").textContent;
        //var fork_name = document.getElementById("fork-name").textContent;
        //var shock_name = document.getElementById("shock-name").textContent;
        //var wheels_name = document.getElementById("wheels-name").textContent;
        //var drivetrain_name = document.getElementById("drivetrain-name").textContent;
        //var brakes_name = document.getElementById("brakes-name").textContent;
        //var userid_input = 4;
        //var itemName_input = 1;
        //var listid_input = 1;




        request = $.ajax({
            url: "ajax/addItemsToRig.php",
            type: "post",
            data: { userID : userid_input, frameName : frame_brand, colourName : colour_name, forkName : fork_name, shockName : shock_name, wheelsName : wheels_name, drivetrainName : drivetrain_name , brakesName : brakes_name, rigName : rig_name}
            //data: { userID : userid_input , frameName : frame_brand}
        });



        //Lets send the data to our PHP file
        //	request = $.ajax({
        //url: "ajax/addItemsToRig.php",
        //type: "post",
        //data: { listid : listid_input, itemName : itemName_input, userID : userid_input, frameName : frame_brand, colourName : colour_name, forkName : fork_name, shockName : shock_name, wheelsName : wheels_name, drivetrainName : drivetrain_name , brakesName : brakes_name}
        //data: { userID : userid_input , frameName : frame_brand}
        //});




        //If we're successfull!
        request.done(function (){
            alert ("Ensure you entered a name and all items!");
        });



    });


});


