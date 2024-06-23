<?php
	if(!defined('Permission')){
		die('Direct access not permitted');
	}

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Pragma: no-cache");
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>

<div class="my-padding">
	<div class="row gx-5 gy-5">
		<div class="col-lg-6"></div>
		<div class="col-lg-6">
			<div class="mb-5">
				<h3 class="">It's nice meeting you!</h3>
				<p class="text-muted">Create an administrator account to manage the system.
				</p>
			</div>
			<form action="./includes/admin_register.inc.php" method="post"> <!--onsubmit="return validatePassword()"-->
				<div class="mb-3 row">
					<div class="col-md-6">
						<label for="first_name" class="form-label">First name</label>
						<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Juan" required="true" value="<?php echo isset($_GET['first_name']) ? $_GET['first_name'] 
							 : ''?>"
						>
					</div>
					<div class="col-md-6">
						<label for="last_name" class="form-label">Last name</label>
						<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Dela Cruz" required="true" value="<?php echo isset($_GET['last_name']) ? $_GET['last_name'] 
							 : ''?>"
						>
					</div>
				</div>
	            <div class="mb-3">
	            	<label for="email_address" class="form-label">Email Address</label>
	            	<input type="email" class="form-control" id="email_address" name="email_address" placeholder="you@example.com" required="true" value="<?php echo isset($_GET['email']) ? $_GET['email'] 
							 : ''?>"
					>

	            	<?php
	            		if (isset($_GET['email_error'])){
	            	?> 
	            	<div class="pt-1 text-danger"><?php echo $_GET['email_error']?></div>
	            	<?php
	            		}
	            	?>

	            </div>
	            <div class="">
	            	<label for="password" class="form-label">Password</label>
	            	<input type="password" class="form-control" id="password" name="password" placeholder="Enter 8 characters or more" required="true">
	            	<?php
	            		if (isset($_GET['password_error'])){
	            	?> 
	            	<div class="pt-1 text-danger"><?php echo $_GET['password_error']?></div>
	            	<?php
	            		}
	            	?>
	            </div>

	            <div class="">
	            	<label for="confirm_password" class="form-label">Password</label>
	            	<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required="true">
	            	<?php
	            		if (isset($_GET['confirmpassword_error'])){
	            	?> 
	            	<div class="pt-1 text-danger"><?php echo $_GET['confirmpassword_error']?></div>
	            	<?php
	            		}
	            	?>
	            </div>

	            <div class="row mt-5">
	            	<div class="col-md-12">
	            		<button type="button submit" class="btn btn-primary w-100">Create account</button>
	            	</div>
        			
	            </div>

			</form>
		</div>
	</div>
</div>
