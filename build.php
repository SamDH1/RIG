<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/rig.css"> <!-- Resource style -->
  	
	<title>RIG Build Page</title>
</head>
<body>
<div class="cd-product-builder">
	<header class="main-header">
		<h1>RIG Product Building Tool</h1>
		
		<nav class="cd-builder-main-nav disabled">
			<ul>
				<li class="active"><a href="#frames">Frame</a></li>
				<li><a href="#colours">Colourway</a></li>
                <li><a href="#forks">Forks</a></li>
				<li><a href="#shocks">Shocks</a></li>
                <li><a href="#wheels">Wheels</a></li>
                <li><a href="#drive">Drivetrain</a></li>
                <li><a href="#brakes">Brakes</a></li>
				<li><a href="#summary">Summary</a></li>
			</ul>
		</nav>

		<a href="https://codyhouse.co/?p=16220" class="cd-nugget-info hide-on-mobile">Article &amp; Download</a>
	</header>

	<div class="cd-builder-steps">
		<ul>
			<li data-selection="frames" class="active builder-step">
				<section class="cd-step-content">
					<header>
						<h1>Select Frame</h1>
						<span class="steps-indicator">Step <b>1</b> of 4</span>
					</header>

					<a href="https://codyhouse.co/?p=16220" class="cd-nugget-info hide-on-desktop">Article &amp; Download</a>

					<ul class="models-list options-list cd-col-2">
						<li class="js-option js-radio" data-price="3199" data-model="product-01">
							<span class="name">Transition Patrol Carbon</span>
							<img src="img/patrol-carbon-blue.png" alt="Patrol">
							<span class="price">from £3,199</span>
							<div class="radio"></div>
						</li>

						<li class="js-option js-radio" data-price="2699" data-model="product-02">
							<span class="name">Transition TR-500 </span>
							<img src="img/tr500-black.png" alt="tr500">
							<span class="price">from £2,699</span>
							<div class="radio"></div>
						</li>
                        
                        <li class="js-option js-radio" data-price="999" data-model="product-03">
							<span class="name">Commencal Meta V4</span>
							<img src="img/meta-am-v4-yellow.png" alt="Meta">
							<span class="price">from £999</span>
							<div class="radio"></div>
						</li>
                        
                        <li class="js-option js-radio" data-price="2499" data-model="product-04">
							<span class="name">Devinci Spartan Carbon</span>
							<img src="img/spartan-carbon-red.png" alt="Spartan">
							<span class="price">from £2,499</span>
							<div class="radio"></div>
						</li>
					</ul>
				</section>
			</li>
			<!-- additional content will be inserted using ajax -->
		</ul>
	</div>

	<footer class="cd-builder-footer disabled step-1">
		<div class="selected-product">
			<img src="img/product01_col01.jpg" alt="Product preview">

			<div class="tot-price">
				<span>Total</span>
				<span class="total">£<b>0</b></span>
			</div>
		</div>
		
		<nav class="cd-builder-secondary-nav">
			<ul>
				<li class="next nav-item">
					<ul>
						<li class="visible"><a href="#0">Colours</a></li>
						<li><a href="#0">Forks</a></li>
                        <li><a href="#0">Shocks</a></li>
                        <li><a href="#0">Wheels</a></li>
                        <li><a href="#0">Drivetrain</a></li>
                        <li><a href="#0">Brakes</a></li>
						<li><a href="#0">Summary</a></li>
						<li class="save" id="save"><a href="#0">Save</a></li>
					</ul>
				</li>
				<li class="prev nav-item">
					<ul>
						<li class="visible"><a href="#0">Frame</a></li>
                        <li><a href="#0">Frame</a></li>
						<li><a href="#0">Colours</a></li>
						<li><a href="#0">Fork</a></li>
						<li><a href="#0">Shock</a></li>
                        <li><a href="#0">Wheels</a></li>
                        <li><a href="#0">Drivetrain</a></li>
                        <li><a href="#0">Brakes</a></li>
                        <li><a href="#0">Summary</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<span class="alert">Please, select a frame first!</span>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>