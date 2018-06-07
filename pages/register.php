<?php

if(isset($_POST['email']) || isset($_POST['password'])){
    if(!$_POST['email'] || !$_POST['password'] || !$_POST['firstName'] || !$_POST['lastName']){
        $error = "Please enter an email and password";
    }
    
    if($_POST['password'] != $_POST['confirmPassword']){
        $error = "The passwords you entered did not match";
    }

    if(!$error){
        //No errors - let’s create the account
        //Encrypt the password with a salt
        $encryptedPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //Insert DB
        $query = "INSERT INTO users (user_email, user_password, user_forename, user_lastname, user_mobile) VALUES (:email, :password, :firstName, :lastName, :mobile)";
        $result = $DBH->prepare($query);
        $result->bindParam(':email', $_POST['email']);
        $result->bindParam(':password', $encryptedPass);
        $result->bindParam(':firstName', $_POST['firstName']);
        $result->bindParam(':lastName', $_POST['lastName']);
        $result->bindParam(':mobile', $_POST['mobile']);
        $result->execute();
        $to = $_POST['email'];
        $subject = "Welcome to RIG";

        $message = "
<html>
<head>
    <title>Welcome to RIG!</title>
</head>
<body>
    <p>Welcome to RIG! Here you will be able to build your bike with ease!</p>
</body>
</html>";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <puls1_15@student.worc.ac.uk>' . "\r\n";

        mail($to,$subject,$message,$headers);

        // Textlocal account details
        $username = 'sam.pulman2@googlemail.com';
        $hash = 'fc67564d9b1e9af71912fac23f2c332e578ceb379b705a60e7d2294f307f3824';

        // Message details
        $numbers = $_POST['mobile'];
        $sender = urlencode('RIG');
        $message = rawurlencode('Thank you for signing up to RIG! ');

        // Prepare data for POST request
        $data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

        // Send the POST request with cURL
        $ch = curl_init('http://api.txtlocal.com/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        echo "<script> window.location.assign('index.php?p=registersuccess'); </script>";
    }


}
?>


<div class="card container mt-5">
    <div class="card-body">
        <h1 class="mb-3">Register</h1>
        <form action="index.php?p=register" method="post">
            <?php if($error){
    echo '<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>
    '.$error.'
    </div>'; 
} ?>
            <div class="form-group">

                <input type="text" class="form-control underlined" id="firstName" name="firstName" placeholder="First Name *">
            </div>
            <div class="form-group">
                <input type="text" class="form-control underlined" id="lastName" name="lastName" placeholder="Last Name *">
            </div>
            <div class="form-group">

                <input type="email" class="form-control underlined" id="email" name="email" placeholder="Email Address *">
            </div>
            <div class="form-group">
                <input type="text" class="form-control underlined" id="mobile" name="mobile" placeholder="Mobile Number">
            </div>
            <div class="form-group">
                <input type="password" class="form-control underlined" id="password" name="password" placeholder="Password *">
            </div>
            <div>
                <input type="password" class="form-control underlined" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password *">
            </div>
            <div class="form-grpup">
                <div class="row">
                    <div class="col-sm" >
                        <button type="submit" id="register-submit" tabindex="4" style="background-color: #7dc169; color: #f1f1f1" class="form-control btn btn-register">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
