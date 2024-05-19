<?php
	if(isset($_SESSION['user_account'])){
		session_destroy();
		header("Location: /paws/");
		exit();
	} else {
		header("Location: /paws/login.php");
		exit();
	}

?>