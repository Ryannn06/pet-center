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
        		<h5 class="modal-title text-uppercase" id="formLabel">Schedule for Appointment</h5>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    		</div>

    		<form>
    			<div class="modal-body">
	        	
	            	<div class="row ">
	                	<div class="col-md-6 mb-3">
	                		<label for="first_name" class="form-label">First Name</label>
	                		<input type="text" class="form-control" id="first_name" disabled>
	                	</div>
	                	<div class="col-md-6 mb-3">
	                		<label for="last_name" class="form-label">Last Name</label>
	                		<input type="text" class="form-control" id="last_name" disabled>
	                	</div>
	            	</div>

            		<div class="mb-3">
            	    	<label for="email_address" class="form-label">Email Address</label>
            	    	<input type="email" class="form-control" id="email_address" disabled>
            		</div>

	            	<div class="row">
	                	<div class="col-md-6 mb-3 ">
	                		<label for="appointment_date" class="form-label">Appointment Date</label>
	                		<input type="date" class="form-control" id="appointment_date" required="true">
	                	</div>
	                	<div class="col-md-6 mb-3 ">
	                		<label for="time" class="form-label">Appointment Time</label>
	                		<select class="form-select" aria-label="time" id="time">
	                		  	<option value="1">7:45 AM - 9:45 AM</option>
	                		  	<option value="2">10:00 AM - 12:00 AM</option>
	                		  	<option value="3">12:45 PM - 2:45 PM</option>
	                		  	<option value="4">3:00 PM - 5:00 PM</option>
	                		</select>
	                	</div>
	           	 	</div>

	           	 	<div class="mb-3">
            	    	<label for="reason" class="form-label">Reason</label>
            	    	<textarea class="form-control" id="reason" required="true"></textarea>
            		</div>
	            
	            	<div class="mb-3 form-check">
	                	<input type="checkbox" class="form-check-input" id="exampleCheck1">
	                	<label class="form-check-label" for="exampleCheck1">I agree to the terms and condition</label>
	           	 	</div>

    			</div>

    			<div class="modal-footer">
    				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        			<button type="button" class="btn btn-success">Submit</button>
    			</div>
    		</form>
   		</div>
  	</div>
</div>