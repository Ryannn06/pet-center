<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		include_once ('./database.inc.php');

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email_address'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$is_staff = 1;
		$is_admin = 1;

		//create array for errors
		$errorArray = array();

		//validate first_name
		if (empty($first_name)){
			$errorArray['first_name_error'] = 'Please enter a first name';
		}else{
			if(isset($errorArray['first_name_error'])){
				unset($errorArray['first_name_error']);
			}
		}

		//validate last_name
		if (empty($last_name)){
			$errorArray['last_name_error'] = 'Please enter a last name';
		}else{
			if(isset($errorArray['last_name_error'])){
				unset($errorArray['last_name_error']);
			}
		}

		//validate email
		if (empty($email)){
			$errorArray['email_error'] = 'Please enter an email address';
		} else {
			//check if email exists
			$duplicate = "SELECT * FROM user_profile WHERE email_address = '$email';";
			$duplicate_result = mysqli_query($connect, $duplicate);
			$result_check = mysqli_num_rows($duplicate_result);

			if ($result_check > 0){
				$errorArray['email_error'] = 'Email address already exists';
			}else{
				unset($errorArray['email_error']);
			}
		}

		//validate password
		if (empty($password)){
			$errorArray['password_error'] = 'Please enter a password';
		} elseif  (strlen($password) < 8){
			$errorArray['password_error'] = 'Password is too short';
		} else {
			if(isset($errorArray['password_error'])){
				unset($errorArray['password_error']);
			}
		}

		//validate confirm_password
		if (empty($confirm_password)){
			$errorArray['confirmpassword_error'] = "Please confirm your password";
		} elseif  ($confirm_password === $password){
			unset($errorArray['confirmpassword_error']);
		} else {
			$errorArray['confirmpassword_error'] = "Passwords don't match";
		}

		//check if there is error or none
		if (empty($errorArray)){
			try {
				//if no error, save to database
				$hashed_password = password_hash($password, PASSWORD_ARGON2I);
				$sql = "INSERT INTO user_profile (first_name, last_name, password,email_address, is_staff, is_admin) VALUES ('$first_name', '$last_name', '$hashed_password', '$email', '$is_staff', '$is_admin');";

				$result = mysqli_query($connect, $sql);
				header("Location: /paws/login.php");
				exit();

			} catch (Exception $e){
				echo $e;
				exit();
			} 
		} else {
			//if there is error, show the errors
			$base_url = "../signup.php?";
			$error_string = http_build_query($errorArray);

			header("Location:" . $base_url . $error_string . "&first_name=$first_name&last_name=$last_name&email=$email");
			exit();	
		}
	}

?>