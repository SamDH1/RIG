<!doctype html>

<html lang="en">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#7dc169" />
    
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icon.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/icon.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/icon.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/icon.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/icon.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/icon.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/icon.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/icon.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/icon.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/icon.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/icon.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/icon.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/icon.ico/favicon-16x16.png">
<link rel="manifest" href="assets/icon.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/icon.ico/ms-icon-144x144.png">

    
    <title>RIG</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light rgreybg">
    <img src="assets/logo.svg" alt="RIG" width="120px" href="index.php?p=home">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=home">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=rig">Build </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=about">About </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=contact">Contact </a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <?php if($_SESSION['loggedin']){ ?>
                <li class="nav-item"><a class="nav-link" href="index.php?p=dashboard">My Account</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?p=logout">Logout</a></li>
            <?php }else{ ?>
                <li class="nav-item"><a class="nav-link" href="index.php?p=login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?p=register">Register</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>
    <div class="hero-spacer">
        <p style="color: #fefefe; text-align: center; vertical-align: middle; line-height: 30px;" href="index.php?p=about"
           >Join or follow us on the official RIG Strava Club</p>
        </div>