<?php
	include ('AAHeader.php');
?>

<div class="conatiner">
	<div class="col-md-6 login-form-2 offset-md-3 mt-5 mb-5">
		<h3>Login</h3>
		<form id="frmLogin">
			<div class="form-group">
				<label data-error="wrong" data-success="right" for="txtUserName" class="text-light" placeholder="Username">Your email</label>
				<input type="text" id="txtUserName" name="txtUserName" class="form-control validate white-text" autocomplete="off">
			</div>

			<div class="form-group">
				<label data-error="wrong" data-success="right" for="txtPassword" placeholder="Password" class="text-light">Your password</label>
				<input type="password" id="txtPassword" name="txtPassword" class="form-control validate white-text">
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-light btn-block btn-rounded z-depth-1" Value="Login">
			</div>

			<div class="form-group">
				<p class="font-small text-light d-flex justify-content-end">Don't have an account? 
					<a href="SignUp.php" class="text-light ml-1 font-weight-bold">Sign Up</a>
				</p>

				<p class="font-small text-light d-flex justify-content-end">Forgot your Password? 
					<a href="#" class="text-light ml-1 font-weight-bold">Click here</a>
				</p>
			</div>
		</form>
	</div>
</div>
<script src="src/js/CustomScripts/headerScript.js"></script>
<script src="src/Constants/constants.js"></script>
<link rel="stylesheet"href="src/css/login.css">


<?php
	include ('footer.php');
?>
 <!--For Sweetalert-->
<script src="src/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="src/css/sweetalert2.min.css">
<link rel="stylesheet" href="src/css/animate.css">
<!--For Sweetalert-->

