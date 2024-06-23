<?php
	session_start();
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
		include "includes/components/navbar.php";
	?>

	<div class="container-fluid">
	<?php
		include "includes/components/Adopt/cards.php";

	?>
	</div>
	<?php
		include "includes/components/footer.php";
	?>
</body>
</html>