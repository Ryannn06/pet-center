<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Paws Center</title>
	<?php
		include "components/JS/main.js";
	?>
</head>
<body>
	<?php
		define('Permission', TRUE);
		include "navbar.php";
	?>

	<div class="container-fluid">
		<?php
			include ("components/Home/hero.php");
			include ("components/Home/about.php");
			include ("components/Home/adopt.php");
			include ("components/Home/donate.php");
		?>
	</div>
	<?php
		include ("footer.php");
	?>
</body>
</html>