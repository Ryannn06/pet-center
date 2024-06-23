<?php
	session_start();

	if (isset($_SESSION['user_account'])){
		header("Location: /paws/");
		exit();
	}  else {
		include_once("includes/validate_num_admin.inc.php");
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
		include "includes/components/navbar.php";
	?>

	<div class="container-fluid">
		<?php
			include ("includes/components/User/adminSignup.php");
		?>
	</div>
	<?php
		include ("includes/components/footer.php");
	?>
</body>
</html>