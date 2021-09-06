<?php

include_once 'database.php';

try {
    $conn = new PDO('mysql:host=localhost', $DB_USER , $DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DROP DATABASE IF EXISTS `$DB_NAME`";
    $conn->exec($sql);
   echo "Database dropped successfully";

    $sql = "CREATE DATABASE IF NOT EXISTS `$DB_NAME`";
    $conn->exec($sql);
   echo "Database created successfully";
    
    } catch(PDOException $e) {
        echo $sql . "Error: <br>" . $e->getMessage();
    }

    try {
        $conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE `users` (
            `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
            `email` varchar(50) NOT NULL,
            `username` varchar(50) NOT NULL,
            `pwd` varchar(255) NOT NULL,
            `validated` VARCHAR(2) NOT NULL DEFAULT 'N'
          )";
        $conn->exec($sql);
       echo "Users table created successfully";
    }
    catch(PDOException $e)
    {
        echo "Error: ". $e->getMessage();
    }

    try {
        $conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE `comments` (
            `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
            `user_id` int(11) NOT NULL,
            `img_id` int(11) NOT NULL,
            `msg` text NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
        $conn->exec($sql);
       echo "Comments table created successfully";
    }
    catch(PDOException $e)
    {
        echo "Error: ". $e->getMessage();
    }

    try {
        $conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE `gallery` (
            `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
            `userId` int(11) NOT NULL,
            `img_name` varchar(255) NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
        $conn->exec($sql);
       echo "Gallery table created successfully";
    }
    catch(PDOException $e)
    {
        echo "Error: ". $e->getMessage();
    }

    try {
        $conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE `likes` (
            `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
            `user_id` int(11) NOT NULL,
            `img_id` int(11) NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
        $conn->exec($sql);
       echo "Likes table created successfully";
    }
    catch(PDOException $e)
    {
        echo "Error: ". $e->getMessage();
    }

    try {
	$conn = new PDO($DB_DSN, $DB_USER , $DB_PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE TABLE `user_info` (
		`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`firstName` varchar(32) NOT NULL,
		`lastName` varchar(32) NOT NULL,
        `gender` char(8) DEFAULT NULL,
		`birthDate` date NOT NULL,
        `sexuality` char(20) DEFAULT 'bi',
        `country` char(20) DEFAULT NULL,
        `locations` char(20) DEFAULT NULL,
        `interest` char(20) DEFAULT NULL,
		`bio` text
		-- `created_at` datetime NOT NULL,
		-- `updated_at` datetime NOT NULL,
		-- `rank` int NOT NULL DEFAULT '0'
		) ENGINE=InnoDB DEFAULT CHARSET=utf8";
	$conn->exec($sql);
	echo "user info table created successfully";
    }
    catch(PDOException $e)
    {
	    echo "Error: ". $e->getMessage();
    }

$conn = null;
?>

