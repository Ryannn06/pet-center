<?php
	if(!defined('Permission')){
	    die('Direct access not permitted');
	    //header('HTTP/1.0 403 Forbidden');
	    //exit;
	};

	include_once ('includes/database.inc.php');
?>


<div class="row my-padding">
	<div class="row pb-5">
		<form class="d-flex col-md-12">
        	<input class="form-control me-2" type="search" placeholder="Search for available adoption..." aria-label="Search">
        	<button class="btn btn-outline-success" type="submit">Search</button>
      	</form>
	</div>
	<div class="row gy-3 gx-3">
		<?php
			$sql = "SELECT * FROM pet_profile WHERE status = 'waiting';";
			$result = mysqli_query($connect, $sql);
			$result_check = mysqli_num_rows($result);

			if ($result_check > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$pet_id = $row['pet_id'];
					$name = $row['name'];
					$description = $row['description'];

					echo '<div class="col-xs-6 col-md-3">
						<div class="card p-3">
							<h5>'. $name .'</h5>
							<p class="text-muted">'. $description .'</p>
							<a href="adopt/pet_profile.php?id= '. $pet_id .' " title="">read more</a>  
						</div>
						
					</div>';

				}
			}
		?>


	</div>
</div>