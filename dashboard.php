<?php
	session_start();

	if(!isset($_SESSION['user_account']) && !isset($_SESSION['user_type'])){
		header("Location: /paws/login.php");
		exit();	
	}

	if($_SESSION['user_type'] == 'user'){
		header("Location: /paws");
		exit();	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Paws Center</title>
	<?php
		include "includes/main.inc.php";
	?>
</head>
<body>
	<?php
		define('Permission', TRUE);
		include ("includes/components/adminNavbar.php");
	?>

	<div class="container-fluid bg-light min-vh-100">
		<?php
			include ("includes/components/Admin/dashboard.php");
		?>
	</div>
</body>
</html>