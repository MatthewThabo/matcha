<?php
    require_once ('../form_cleaner.php');
	require_once ('../config/database.php');

    session_start();

    if (isset($_POST['submit'])) {
        $username = test_input($_POST['uname']);
        $password = test_input($_POST['psw']);
        // echo $username . " " . $password; 

        // $error = "";

        if (empty($username) || empty($password)) {
            $error = "Please fill all fields";
        } else {
            try {
                $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $db->prepare("SELECT * FROM users WHERE username = '$username'");
                $value = array($username);
                $stmt->execute($value);
                $results = $stmt->fetchAll();
                $rowCount = $stmt->rowCount();
                if ($rowCount > 0) {
                    foreach ($results as $value) {
                        $id = $value['id'];
                        $uname = $value['username'];
                        $pass = $value['pwd'];
                    }
                    $psw = hash("whirlpool", $password);
                    if ($uname === $username && $psw === $pass) {
                        $_SESSION['id'] = $id;
                       header("Location: profile.php");
                    } else {
                        $error = "Incorrect username or password";
                    }
                } else {
                    $error = "User does not exist";
                }
            } catch (PDOException $e) {
                echo "ERROR SELECTING Users: \n" . $e->getMessage() . "\nAborting process\n";
                exit;
	    }
    }
    }

if (isset($_POST['verify']))
{
    $id = $_POST['uname'];
    try{
        $conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare("UPDATE users SET validated = Y WHERE username='$id'");
        $values = array($uname);
        $query->execute($values);
        header('Location: ../index.php');
    }
    catch(PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
}?>