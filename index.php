<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="application.css">
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
	<title>Document</title>
</head>
<body>
	
	<div id="homescreen">
		<div id = "pizzahome">
		<?php
			include "header.php";
		?>

		</div>
		<div id = "restaurantinfo">
			<h2>Sign up for our newsletter!</h2>
			<form id="one" name = "first" method = "POST" action = "form.php">
			<input type="text" name="firstname" placeholder="First Name" style= "width: 300px;height: 40px;"><br><br>
			<input type="text" name="lastname" placeholder="Last Name" style= "width: 300px;height: 40px;"><br><br>
			<input type="email" name="email" placeholder="E-mail (me@me.com)" required style= "width: 300px;height: 40px;"><br><br>
			<input type = "submit" id = "submit"><br><br>
			</form>
			<img id="pizza1" src="cartoon.png" alt="pizza">
			<img id="pizza2" src="cartoon.png" alt="pizza">
		</div>
	</div>
</body>
</html>