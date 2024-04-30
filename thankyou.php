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
    <link rel="stylesheet" href="style_thankyou.css">
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
		<div class="content">
           <h1>THANKYOU FOR THE PURCHASE!</h1>
		</div>
		<div class="signature">
			<h5> By: Candice Ivy Cantancio & Steven Savior.</h5>
		</div>
	</div>
	<script>
		document.getElementById("logout").onclick = function {
			<a href="php/logout.php">
		}
	<script>
</body>
</html>