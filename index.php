<?php
$servername = "dbmysql:3306";
$username = "root";
$password = "root";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=project", $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo "Connected successfully";
    }
catch(PDOException $e)
    {
	print_r($e);    	
	echo "Connection failed: " . $e->getMessage();
		
	
    }
?>
