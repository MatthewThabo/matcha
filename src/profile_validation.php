<?php
if(!isset($_SESSION)){
    session_start();
}
// $current_page = "signup";
	include '../form_cleaner.php';
	include '../config/database.php';

	if (isset($_POST['submit'])) {
  	$fname = test_input($_POST["firstname"]);
  	$lname = test_input($_POST["lastname"]);
  	$gender = test_input($_POST["gender"]);
    $bday = test_input($_POST["bday"]);
    $sexual_orientation = test_input($_POST["sexual_orientation"]);
    $country = test_input($_POST["country"]);
    $locations = test_input($_POST["locations"]);
    $interest = test_input($_POST["interest"]);
    $subject = test_input($_POST["subject"]);
      echo "$fname";
	  echo "$lname";
	  echo "$gender";
	  echo "$bday";
      echo "$sexual_orientation";
      echo "$country";
      echo "$subject";

  	// if (empty($fname) || empty($lastname) || empty($gender) || empty($bday) || empty($sexual_orientation) || empty($country) || empty($subject)) {
    // 	$error = "Please fill all fields";
	// }	
	// else if (strlen($fname) > 20 || strlen($fname) < 4) {
    // 	$error = "Name should be between 6 and 20 characters";
    // }
    // else if (strlen($lastname) > 20 || strlen($lastname) < 4) {
    //     $error = "LastName should be between 6 and 20 characters";
    // }
    echo "test1";
    try {
        $conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare("INSERT INTO user_info (firstname, lastName, gender, birthDate, sexuality, country, locations, interest, bio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $values = array($fname, $lname, $gender, $bday, $sexual_orientation, $country, $locations, $interest, $subject);
        $query->execute($values);
        echo "profile inserted";
        header("Location: search.php");
    }
    catch(PDOException $e){
        echo 'Error: '. $e->getMessage(); 
                            }
    }
?>