<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
	<!-- Live Data Start -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/liveData.js"></script>
</head>
<body>

<!-- Nav Start -->
    <nav class="navbar navbar-default">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="mailto:info@liamwho.com?subject=Hair Studio Information Request">info@weatherstation.com </a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			<li><a href="index.php">Latest Weather Data</a></li>
			<li><a href="archives.php">Archives</a></li>
			<li><a href="stations.php">Stations</a></li>
			<li><a href="liveData.php">Live Data JS</a></li>
			<li><a href="countyMap.php">Live Map</a></li>
			<li><a href="liveNODE.php">Live NODE ajax</a></li>
			</ul>
			<!-- Login Disabled
			<ul class="nav navbar-nav navbar-right">
			<li><?php if (isset($_SESSION['clientName'])) { echo "Welcome, ".$_SESSION['clientName']; } else { echo '<a href="login.php">Log In</a>'; } ?></li>
			<li><?php if (isset($_SESSION['clientName'])) { echo '<a href="tools/logout.php">Log Out</a>'; } else { echo '<a href="createAccount.php">Register</a>'; } ?></li>
			</ul>  -->
		</div><!--/.nav-collapse -->
		</div>
    </nav>

<!-- Header Start -->
    <header id="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-5">
			<h1><i class="fa fa-home" style="font-size:36px;color:white"></i> Weather Station <small><a href="tel:086 456 2252">Telephone: 086 456 2252</a></small></h1>
			</div>
			<div class="col-lg-3 col-md-5">
				<div class="social">
				<?php if (isset($_SESSION['clientName'])) { 
					echo '
					<!--Facebook-->
					<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-official" style="font-size:48px;color:white"></i></a>
					<!--Twitter-->
					<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" style="font-size:48px;color:white"></i></a>
					<!--Youtube-->
					<a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube-square" style="font-size:48px;color:white"></i></a>
					<!--Skype-->
					<a href="skype:liam_who?call" ><i class="fa fa-skype" style="font-size:48px;color:white"></i></a>
					<!--Profile-->
					<a href="profile.php" target="_self"><i class="fa fa-user" style="font-size:48px;color:white"></i></a>
					'; 
				} else { 
					echo '
					<!--Facebook-->
					<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-official" style="font-size:48px;color:white"></i></a>
					<!--Twitter-->
					<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" style="font-size:48px;color:white"></i></a>
					<!--Youtube-->
					<a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube-square" style="font-size:48px;color:white"></i></a>
					<!--Skype-->
					<a href="skype:liam_who?call" ><i class="fa fa-skype" style="font-size:48px;color:white"></i></a>
					'; 
				}
				?>
			</div>
			</div>
		</div> <!-- Row End -->
	</div> <!-- Container End -->
    </header><!-- Header End -->