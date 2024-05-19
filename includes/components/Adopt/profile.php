<?php
    if(!defined('Permission')){
        die('Direct access not permitted');
        //header('HTTP/1.0 403 Forbidden');
        //exit;
    }
    
    include_once ('../includes/database.inc.php');
    include ('../includes/components/Adopt/form.php');
?>

<div class="row my-padding">
	<div class="row">
		<div class="col-lg-6">
			<p>image</p>
		</div>
		<div class="col-md-12 col-lg-6 row text-right gy-3">
		<?php
			$pet_id = $_GET['id'];

			$sql = "SELECT * FROM pet_profile WHERE pet_id = $pet_id;";
			$result = mysqli_query($connect, $sql);
			$result_check = mysqli_num_rows($result);

			if ($result_check > 0) {
				while ($row = mysqli_fetch_assoc($result)){
					$name = $row['name'];
					$desc = $row['description'];
					$gender = $row['gender'];
					$date_rescued = $row['date_rescued'];
					$height = $row['height'];
					$weight = $row['weight'];
					$health_note = $row['health_notes'];

					echo '
						<h2 class="pb-3">'. $name .'</h2>
						<div class="col-md-12">
							<h6 class="text-muted">Description</h6>
							<p>'. $desc .'</p>
							<hr>
						</div>
						<div class="col-md-6">
							<h6 class="text-muted">Date Rescued</h6>
							<p>'. $date_rescued .'</p>
							<hr>
						</div>
						<div class="col-md-6">
							<h6 class="text-muted">Gender</h6>
							<p>'. $gender .'</p>
							<hr>
						</div>
						<div class="col-md-6">
							<h6 class="text-muted">Height</h6>
							<p>'. $height .'</p>
							<hr>
						</div>
						<div class="col-md-6">
							<h6 class="text-muted">Weight</h6>
							<p>'. $weight .'</p>
							<hr>
						</div>
						<div class="col-md-12">
							<h6 class="text-muted">Health Note</h6>
							<p>'. $health_note .'</p>
							<hr>
						</div>
						<div class="col-md-12 pb-3">
							<h6 class="text-muted">Vaccination Status</h6>
							<p></p>
						</div>
						<div class="col-md-12">
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form">
								schedule for appointment
							</button>
						</div>
					';
				}
			}

		?>
			<div class="pt-5">
				<p class="text-muted"><i>Learn our adoption 
					<a href="#" class="">process</a>?</i>
				</p>
			</div>
		</div>
	</div>
</div>
