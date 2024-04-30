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
        <img src="logo.png" class="logo" onclick="returnHome()"> 
            <ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Login.php">Login</a></li>
			</ul>
        </div>
		<div class="content_login">
		<?php
		include('php/config.php');
		include('db-connect.php');
			
		if (isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
		
			if(empty($username) || empty($password) || empty($email)){
				echo "<div class='message1'>
                  <p>Username, Password and Email cannot be blank. Please fill in all fields.</p>
				</div> <br>";
			}else{
				$verifyEmailQuery = mysqli_query($con, "SELECT Email FROM account WHERE Email='$email'");
				
		if (mysqli_num_rows($verifyEmailQuery) != 0) {
			echo "<div class='message1'>
				<p>This email is used. Please try another one.</p>
			</div> <br>";
		}else{
			$verifyUsernameQuery = mysqli_query($con, "SELECT Username FROM account WHERE Username='$username'");

			if (mysqli_num_rows($verifyUsernameQuery) != 0) {
				echo "<div class='message1'>
					<p>This username is not available. Please choose another one.</p>
				</div> <br>";
			}else{
			$allowedDomains = array("yahoo.com", "gmail.com");
			$emailParts = explode("@", $email);
			$domain = end($emailParts);

			if (in_array($domain, $allowedDomains)) {
				// Check if the password length is between 8 and 16 characters
				if (strlen($password) < 8 || strlen($password) > 16) {
					echo "<div class='message1'>
						<p>Password must be between 8 and 16 characters long.</p>
					</div> <br>";
				}else{
					mysqli_query($con, "INSERT INTO `account`(Username, Password, Email) VALUES('$username', '$password', '$email')") or die ("Select Error");
					echo "<div class='message'>
						<p>Registration successful!</p>
					</div> <br>";
				}
				}else{
					echo "<div class='message1'>
						<p>Invalid email domain. Only yahoo.com and gmail.com are allowed.</p>
					</div> <br>";
				}
			}
		}
	}
}
		?>
			<form action="" method="post">
				<div class="field input">
					<label for="username"></label>
					<input type="text" name="username" id="username" placeholder="Username" required>
				</div>
				<div class="field input">
					<label for="password"></label>
					<input type="password" name="password" id="password" placeholder="Password" required>
				</div>
				<div class="field input">
					<label for="email"></label>
					<input type="text" name="email" id="email" placeholder="Email" required>
				</div>
				<div class="field">
					<button type="submit" name="submit" onclick="return validateEmail()"><span></span>Register</button>
					<button onclick="login()" type="button"><span></span>Login</button>
				</div>
			</form>
		</div>
        <div class="signature">
            <h1> By: Candice Ivy Cantancio & Steven Savior.</h1>
        </div>
    </div>
	<script>
		function validateEmail() {
            var emailInput = document.getElementById("email");
            var emailError = document.getElementById("emailError");

            var allowedDomains = ["yahoo.com", "gmail.com"];
            var emailParts = emailInput.value.split("@");
            var domain = emailParts.length === 2 ? emailParts[1] : "";

            if (!allowedDomains.includes(domain)) {
                emailError.innerHTML = "Invalid email domain. Only yahoo.com and gmail.com are allowed.";
                return false; // Prevent form submission
            } else {
                emailError.innerHTML = "";
                return true; // Allow form submission
            }
        }
	</script>
</body>
</html>