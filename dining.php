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
    <link rel="stylesheet" href="style_selection.css">
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
			<div class="card card1">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card2">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card3">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card4">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card5">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card6">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card7">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card8">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
		</div>
		<div class="row rownew">
			<div class="card card9">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card10">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card11">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card12">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card13">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card14">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card15">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
			</div>
			<div class="card card16">
				<h1>Dining</h1>
				<div class="cart">
				<form action="./thankyou.php" method="get">
					<button type="submit" value="Submit"><span></span>BUY</button>
				</form>
				</div>
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
	<script>
</body>
</html>