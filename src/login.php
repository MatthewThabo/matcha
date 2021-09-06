<?php 
    include 'login_validation.php';
    include '../includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Merienda+One');
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
</style>
<link rel="stylesheet" type="text/css" href="../style/global.css">
<link rel="stylesheet" type="text/css" href="../style/header.css">
<link rel="stylesheet" type="text/css" href="../style/login.css">
<meta name="google" content="notranslate" />
<title>login - matcha</title>
</head>

<body>

	<div class="center">
		<h2>login</h2><br/>

		<form method="POST" action="login_validation.php">
			<fieldset>
				<legend>Connect</legend><br/>
			<label for="uname">Username :</label>
			<input type="text" placeholder="Enter your username" name="uname">
			<br>

			<label for="psw">Password :</label>
			<input type="password" placeholder="Enter Password" name="psw">
			<br>

			<div>
			<button type="submit" name="submit" class="signupbtn">Login</button>
		</div>
			</fieldset>
			<p class="text">Forgot Password ? <a href="forgot_Password.php">Click here !</a></p>
			</form><br/><br/>

<?php		
	if (isset($error)) {
	echo $error;
	}
?>
			

	</div>
</body>
<?php
include '../includes/footer.php';
?>
</html>
