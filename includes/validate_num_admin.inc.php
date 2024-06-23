<?php
	include_once ('./includes/database.inc.php');

	$mysql = 'SELECT * FROM user_profile WHERE is_staff = 1 AND is_admin = 1;';
	$result = mysqli_query($connect, $mysql);
	$result_check = mysqli_num_rows($result);

	if ($result_check >= 1){
		die('Access not permitted');
	} else {
		define('Permission', TRUE);
	}

?>