<?php
if(!isset($_SESSION)){
    session_start();
}

 $current_page = "signup";
	include '../form_cleaner.php';
	include '../config/database.php';

	if (isset($_POST['submit'])) {
  	$uname = test_input($_POST["uname"]);
  	$email = test_input($_POST["email"]);
  	$psw = test_input($_POST["psw"]);
	$pswrepeat = test_input($_POST["pswrepeat"]);
	//   echo "$uname";
	//   echo "$email";
	//   echo "$psw";
	//   echo "$pswrepeat";
	//   echo "Thabo111111";

  	// if (empty($uname) || empty($psw) || empty($pswrepeat) || empty($email)) {
	// 	$error = "Please fill all fields";
	// }	
	// else if (strlen($uname) > 20 || strlen($uname) < 4) {
	// 	$error = "Username should be between 4 and 20 characters";
	// }
	// else if (strlen($psw) < 6)
	// {
    // 	$error = "Password must be atleast 6 characters";
	// }
	// else if (!preg_match('/[0-9]/', $psw))
	// {
    // 	$error = "Password must have atleast one numeric ";
	// }
	// elseif(!preg_match('/[A-Z]/', $psw)){
    // 	$error = "Password must have at least one uppercase letter";
	// }
	// else if (!preg_match('/[\'^Â£$%&*()}{@#~?!><>,|=_+Â¬-]/', $psw))
	// {
    // 	$error = "Password must have at least one special character";
	// }
	// else if ($psw != $pswrepeat) {
    // 	$error = "Password do not match";
	// }
	// else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // 	$error = "Please enter a valid email";
	// }
	// else {
    	$psw = hash("whirlpool", $psw);
      	try {
        $conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare("INSERT INTO users (email, username, pwd) VALUES (?, ?, ?)");
        $values = array($email, $uname, $psw,);
		$query->execute($values);
		
        $to = $email;
        $subject = "My subject";
        $txt = "registration complete! please confirm your email below.
        http://localhost:8080/matcha/src/verify.php?uname=$uname";
		$headers = "From: tmatlena@matcha-AllYouNeedIsLove.com" . "\r\n" .
		"CC: somebodyelse@example.com";

        $jam = mail($to,$subject,$txt,$headers);
    	if ($jam)
    {
	   echo "Please check your email ' ' $uname";
    }
          
      } catch(PDOException $e) {
        echo "Error: ". $e->getMessage();
      }
//    }
}
?>