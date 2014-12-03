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
			Sign up for our newsletter!
			<form id="one" name = "first" method = "POST" action = "form.php">
			First name:<br>
			<input type="text" name="firstname">
			<br>
			Last name:<br>
			<input type="text" name="lastname"><br>
			Email:<br>
			<input type="email" name="email" required><br>
			<input type = "submit" id = "submit"><br>
			</form>
		</div>
	</div>
</body>
</html>