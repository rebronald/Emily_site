<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Alberton House is a website giving information on the history, ">
	<meta name="keywords" content="HTML,CSS,XML,Javacript">
	<meta name="author" content="John Doe">
	
	<title>Page Title</title>
	
	<!-- link to css goes here -->
	<link href="alberton_style.css" rel="stylesheet">
	
	<!-- google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans%7cNoto+Serif" rel="stylesheet">
	
</head>

<body>

	<div class="wrapper">
		
		<header class="box">
			<a href="index_alberton.php">
				<img class="roundleft" src="images/alberton_model.jpg" alt="model of alberton house that has been 3D printed" width="113" height="80" title="links to home page."/>
			</a>
		
			<h1>Events at Alberton House</h1>
			
		</header>
		
		<nav class="box">
			
			<a class="dropbtn" href="index_alberton.php">Home</a> |
			
			<div class="dropdown"> <!-- start of dropdown -->
				<a class="dropbtn" href="#">Event Hires &#8711;</a>
				<div class="dropdown-content">
					<a href="alberton_events.php">Hosting Events</a>
					<a href="alberton_cost_opentimes.php">Cost and Open Times</a>
				</div> <!-- / end of dropdown content -->
			</div> | <!-- / dropdown -->
			
			<a class="dropbtn" href="contact.php">Contact</a> 
			<a class="dropbtn" href="gallery.php">Gallery</a>
			
		</nav>
		