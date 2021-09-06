<?php
	include 'signup_validation.php';
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
<link rel="stylesheet" type="text/css" href="../styele/login.css">
<meta name="google" content="notranslate" />
<title>signup - matcha</title>
</head>

<body>
	<div class="center">
		<h2>signup</h2><br/>

		<form method="POST" action="signup_validation.php">
			<fieldset>
				<legend>Register</legend><br/>
			<label for="uname">Username        :</label>
			<input type="text" placeholder="Enter your username" name="uname">
			<br>
			<br>
			
			<label for="email">Email           :</label>
			<input type="text" placeholder="Enter your email" name="email">
			<br>
			<br>
			
			<label for="psw">Password        :</label>
			<input type="password" placeholder="Enter Password" name="psw">
			<br>
			<br>
			
			<label for="pswrepeat">Repeat Password :</label>
			<input type="password" placeholder="Enter Password" name="pswrepeat">
			
			<p>You already have an account <a href="login.php" style="color:dodgerblue">login</a>.</p>
			
			<div>
			<button type="submit" name="submit" class="signupbtn">Sign Up</button>
		</div>

<?php
	if (isset($error)) {
		echo $error;
	}
?>
	
		</fieldset>
		</form>
	</div>
</body>
<?php
include '../includes/footer.php';
 ?>
</html>
