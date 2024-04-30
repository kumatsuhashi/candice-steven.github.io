<?php 
   session_start();
?><?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <title>Enchanting Haven</title>
    <link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="./cscript.js"></script>
</head>
<body>
    <div class="banner">
        <div class="navbar">
        <img src="logo.png" class= "logo" onclick="returnHome()">
		<ul>
			<li><a href="index.php">Home</a></li>
		</ul>
        </div>
        <div class="content_login">
		<?php
		include('php/config.php');
			
		if (isset($_POST['submit'])){
			$username = mysqli_real_escape_string($con,$_POST['username']);
			$password = mysqli_real_escape_string($con,$_POST['password']);
			$result = mysqli_query($con, "SELECT * FROM account WHERE Username='$username' AND Password='$password' ") or die("Select Error");
			$row = mysqli_fetch_assoc($result);
			if(is_array($row) && !empty($row)){
                   $_SESSION['valid'] = $row['Username'];
                   $_SESSION['password'] = $row['Password'];
				   $_SESSION['id'] = $row['Id'];
				header("Location: home.php");
				exit();
			}else{
                echo "<div class='message1'>
                  <p>Wrong Username or Password</p>
                </div> <br>";
            }
		}
		?>
		<form action="" method="post">
			<label for="username"></label>
			<input type="text" placeholder="Username" name="username" required>
			<div class="field">
			<label for="password"></label>
			<input type="password" placeholder="Password" name="password" required>
			</div>
            <div class="field">
                <button type="submit" name="submit"><span></span>Login</button>
                <button onclick="signup()" type="button"><span></span>Signup</button>
			</div>
		</form>
        </div>
        <div class="signature">
            <h1> By: Candice Ivy Cantancio & Steven Savior.</h1>
        </div>
    </div>
</body>

</html>