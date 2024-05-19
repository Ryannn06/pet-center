<?php
	session_start();
	if(!isset($_SESSION['user_account'])){
		header("Location: /");
		exit();
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		include_once ('../includes/database.inc.php');


		$user_id = $_SESSION['user_account'];
		$appointment_date = $_POST['appointment_date'];
		$time = $_POST['time'];
		$reason = $_POST['reason'];

		echo 'hi';

		try {
			$sql = "INSERT INTO appointment (appointment_date, appointment_time, booked_by, reason) 
					VALUES ('$appointment_date', '$time', '$user_id' ,'$reason');";

			$result = mysqli_query($connect, $sql);

			$status = 'success';
			header("Location: ../adopt/appointment.php" . "?status=" . urlencode($status));
			exit;

		} catch(Exception $e){

			$status = 'failed';
			header("Location: ../adopt/appointment.php" . "?status=" . urlencode($status));
			exit;
		}
	}
	


	/*
	if (isset($_SERVER['HTTP_REFERER'])){

		$status = 'success'
		header("Location:" . $_SERVER['HTTP_REFERER'] . "?status=" . urlencode($status));
		exit;

	} else {
		header("Location: ../adopt.php");
		exit;
	};*/
	
?>