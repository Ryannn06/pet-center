<?php
	if(!defined('Permission')){
		die('Direct access not permitted');
	}
?>

<div class="my-padding">
	<div class="row gx-5 gy-5">
		<div class="col-lg-6"></div>
		<div class="col-lg-6">
			<div class="mb-5">
				<h3 class="">Welcome Back!</h3>
				<p class="text-muted">To keep connected with us please login with your personal information by email address and password.
				</p>
			</div>
			<form action="./includes/login.inc.php" method="post">
				<?php
					if(isset($_GET['login_error'])){
						echo '<p class="text-danger">'. $_GET['login_error'] .'</p>';
					}
				?>
	            <div class="mb-3">
	            	<label for="email_address" class="form-label">Email address</label>
	            	<input type="email" class="form-control" id="email_address" name="email_address" placeholder="you@example.com">
	            </div>
	            <div class="mb-3">
	            	<label for="password" class="form-label">Password</label>
	            	<input type="password" class="form-control" id="password" name="password" placeholder="Enter 8 characters or more">
	            </div>
	            <div class="mb-5">
	            	<a href="" title="" class="text-decoration-none text-primary text-right">forgot password?</a>
	            </div>
	            <div class="row gy-3">
	            	<div class="col-md-6">
	            		<button type="button submit" class="btn btn-primary w-100">Login</button>
	            	</div>
        			<div class="col-md-6">
        				<a href="/paws/signup.php" class="btn btn-outline-primary w-100">Create Account</a>
        			</div>
        			
	            </div>

			</form>
		</div>
	</div>
</div>