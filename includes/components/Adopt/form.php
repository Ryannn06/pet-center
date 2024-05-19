<?php
	if(!defined('Permission')){
	    die('Direct access not permitted');
	    //header('HTTP/1.0 403 Forbidden');
	    //exit;
	};
?>

<!-- Modal -->
<div class="modal fade" id="form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<div>
        			<h4 class="modal-title text-uppercase" id="formLabel">Appointment Form</h4>
        			<p class="p-0 m-0 text-muted">To schedule for appointment, please fill out the form below.</p>
        		</div>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    		</div>

    		<form method="post" action="../includes/submit_appointment.inc.php">
    			<div class="modal-body">
    				<?php
    					$user_id = $_SESSION['user_account'];
    					$sql = "SELECT first_name, last_name, email_address FROM user_profile WHERE user_id = $user_id;";
    					$result = mysqli_query($connect, $sql);
    					$result_check = mysqli_num_rows($result);

    					if ($result_check > 0){
    						while ($row = mysqli_fetch_assoc($result)){
    							$first_name = $row['first_name'];
    							$last_name = $row['last_name'];
    							$email_address = $row['email_address'];

    							echo '
    							<h5>Personal Information</h5>
    							<hr></hr>
			    				<div class="row">
				                	<div class="col-6 col-md-6">
				                		<p class="mb-0 p-0">First Name: <span class="text-muted"> ' . $first_name . ' </span></p>
				                		
				                	</div>
				                	<div class="col-6 col-md-6">
				                		<p class="mb-0 p-0">Last Name: <span class="text-muted"> ' .$last_name . ' </span></p>
				                	</div>
				                	<div class="col-md-12">
				                		<p>Email Address: <span class="text-muted">' . $email_address . '</span></p>
				                	</div>
				            	</div>
    							';

    						}
    					}
    				?>
	        		<h5 class="pt-3">Appointment Details</h5>
	        		<hr></hr>
	            	<div class="row">
	                	<div class="col-md-6 mb-3 ">
	                		<label for="appointment_date" class="form-label">Appointment Date</label>
	                		<input type="date" class="form-control" id="appointment_date" name="appointment_date" required="true">
	                	</div>
	                	<div class="col-md-6 mb-3 ">
	                		<label for="time" class="form-label">Appointment Time</label>
	                		<select class="form-select" aria-label="time" id="time" name="time">
	                		  	<option value="1">7:45 AM - 9:45 AM</option>
	                		  	<option value="2">10:00 AM - 12:00 AM</option>
	                		  	<option value="3">12:45 PM - 2:45 PM</option>
	                		  	<option value="4">3:00 PM - 5:00 PM</option>
	                		</select>
	                	</div>
	           	 	</div>

	           	 	<div class="mb-3">
            	    	<label for="reason" class="form-label">Reason</label>
            	    	<textarea class="form-control" id="reason" name="reason" required="true"></textarea>
            		</div>
	         
	            	<!---<div class="mb-3 form-check">
	                	<input type="checkbox" class="form-check-input" id="exampleCheck1">
	                	<label class="form-check-label" for="exampleCheck1">I agree to the terms and condition</label>
	           	 	</div>-->

    			</div>

    			<div class="modal-footer">
    				<button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
        			<button type="button submit" class="btn btn-primary">Submit</button>
    			</div>
    		</form>
   		</div>
  	</div>
</div>