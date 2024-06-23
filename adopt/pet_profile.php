<?php
	session_start();
	
	if (!isset($_SESSION['user_account'])){
		header("Location: /paws/login.php");
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
		include "../includes/main.inc.php";
	?>
</head>
<body>
	<?php
		define('Permission', TRUE);
		include "../includes/components/navbar.php";

		/*if(isset($_GET['notification'])){
			$notification = $_GET['notification'];
			echo "<script>alert('$notification')</script>";
		};*/
	?>

	<div class="container-fluid">
		<?php
			include ("../includes/components/Adopt/profile.php");
		?>
	</div>
	<?php
		include ("../includes/components/footer.php");
	?>
</body>
</html>