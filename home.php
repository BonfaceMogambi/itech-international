<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Custom BonnieTech</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<nav class="navbar">
			<img class="logo" src="logo.jpg">
			<ul>
				<li><a class="active" href="#">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Feedback</a></li>
				<li><a class="float-right" href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>
		<div class="center">
			<h1>Hello, <?php echo $_SESSION['username']; ?><br> Welcome To Atech International</h1>
			<h2>Create Something New</h2>
			<div class="buttons">
				<button>Explore More</button>
				<button class="btn">Subscribe Us</button>
			</div>
		</div>
	</div>
</body>
</html>