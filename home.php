<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
   header("Location: login.php");
   }
?><?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <title>Enchanting Haven</title>
    <link rel="stylesheet" href="style_home.css">
	<script type="text/javascript" src="./cscript.js"></script>
</head>
<body>
	<div class="banner">
		<div class="navbar">
		<img src="logo.png" class="logo" onclick="returnHome()">
			<li class='active' style='float:right;'>
			<?php
				$id = $_SESSION['id'];
				$query = mysqli_query($con, "SELECT * FROM account WHERE Id='$id' AND Username='$username'");
	
				while ($result = mysqli_fetch_assoc($query)) {
					$res_Uname = $result['Username'];
					$res_id = $result['Id'];
				}
			?>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="php/logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="row">
			<div class="col">
				<h1>Sophistication Redefined</h1>
				<p>Creating timeless elegance for your home.</p>
				<button type="button">Explore</button>
			</div>
			<div class="col">
				<a href="./bedroom.php">
				<div class="card card1">
					<h5>Bedroom</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices nulla at tortor tempor, vel blandit orci egestas.</p>
				</div>
				</a>
				<a href="./dining.php">
				<div class="card card2">
					<h5>Dinning</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices nulla at tortor tempor, vel blandit orci egestas.</p>
				</div>
				</a>
				<a href="./kitchen.php">
				<div class="card card3">
					<h5>Kitchen</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices nulla at tortor tempor, vel blandit orci egestas.</p>
				</div>
				</a>
				<a href="./backyard.php">
				<div class="card card4">
					<h5>Backyard</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices nulla at tortor tempor, vel blandit orci egestas.</p>
				</div>
				</a>
				<a href="./frontyard.php">
				<div class="card card5">
					<h5>Frontyard</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices nulla at tortor tempor, vel blandit orci egestas.</p>
				</div>
				</a>
				<a href="./bathroom.php">
				<div class="card card6">
					<h5>Bathroom</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultrices nulla at tortor tempor, vel blandit orci egestas.</p>
				</div>
				</a>
			</div>
		</div>
		<div class="signature">
			<h1> By: Candice Ivy Cantancio & Steven Savior.</h1>
		</div>
	</div>
	<script>
		document.getElementById("logout").onclick = function {
			<a href="php/logout.php">
		}
		document.getElementById("submitbed").onclick = function {
			<a href="php/bedroom.php">
		}
	<script>
</body>
</html>