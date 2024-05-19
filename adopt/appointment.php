<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Paws Center</title>
	<?php
		include "../includes/components/JS/main.js";
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
			$status = $_GET['status'];

			if ($status == 'success'){
				echo '<div class="row my-padding">
					<h2 class="text-center pb-2">Appointment is under review!</h2>
					<p class="text-center">Appointment booked succesfully and under review. You will be notified via email once it has been approved.</p>
				</div>';
			} else {
				echo '<div class="row my-padding">
					<h2 class="text-center pb-2">Oops, something went wrong.</h2>
					<p class="text-center">We keep track of these errors, but feel free to contact us if refreshing does not fix things.</p>
				</div>';
			}
		?>
	</div>
	<?php
		include ("../includes/components/footer.php");
	?>
</body>
</html>