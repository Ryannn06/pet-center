<?php
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "paws_center";

	$connect = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

	if ($connect->connect_error){
		die("Connection failed: " . $connect->connect_error);
	}

?>