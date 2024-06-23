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

					if ($row['is_staff'] == 0 && $row['is_admin'] == 0){
						$_SESSION['user_type'] = 'user';
						header("Location: ../");
						exit();
					} elseif ($row['is_staff'] == 1 && $row['is_admin'] == 0){
						$_SESSION['user_type'] = 'staff';
						$_SESSION['first_name'] = $row['first_name'];
						header("Location: ../dashboard.php");
						exit();
					} elseif ($row['is_staff'] == 1 && $row['is_admin'] == 1){
						$_SESSION['user_type'] = 'admin';
						$_SESSION['first_name'] = $row['first_name'];
						header("Location: ../dashboard.php");
						exit();
					} else {
						header("Location: ../");
						exit();
					}
					

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