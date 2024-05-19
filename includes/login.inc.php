<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		include_once ('./database.inc.php');

		$email_address = $_POST['email_address'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM user_profile WHERE email_address = '$email_address';";
		$result = mysqli_query($connect, $sql);
		$result_check = mysqli_num_rows($result);

		if($result_check > 0){
			while($row = mysqli_fetch_assoc($result)){
				if($password && password_verify($password, $row['password'])){

					session_start();
					$_SESSION['user_account'] = $row['user_id'];
					header("Location: ../" . $login_error);
					exit();

				} else {
					$login_error = "login_error= Sorry, you may have entered an incorrect email or password";
					header("Location: ../login.php?" . $login_error);
					exit();
				}
			}

		} else {
			$login_error = "login_error= Sorry, you may have entered an incorrect email or password";
			header("Location: ../login.php?" . $login_error);
			exit();
		}


	} else {
		header("Location: ../");
		exit();
	}

?>