<?php
	include('HeaderAdmin.php');
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow black-text animated h2Styles">
				Add Admin
			</h2>
		</div>
	</div>

	<div class="row mt-3">		
		<div class="col-sm-5 offset-md-1">
			<div class="input-group form-control-border">
				<div class="input-group-append input-icon-bg-transparent">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" class="form-control" placeholder="First Name" id="txtFirstName">
			</div>
		</div>
		<div class="col-sm-5">
			<div class="input-group form-control-border">
				<div class="input-group-append input-icon-bg-transparent">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" class="form-control" placeholder="Last Name" id="txtLastName">
			</div>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-sm-5 offset-md-1">
			<div class="input-group form-control-border">
				<div class="input-group-append input-icon-bg-transparent">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
				</div>
				<input type="text" class="form-control" placeholder="Employee Code" id="txtMail">
			</div>
		</div>
		<div class="col-sm-5">
			<div class="input-group form-control-border">
				<div class="input-group-append input-icon-bg-transparent">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile"></i></span>
				</div>
				<input type="text" class="form-control" placeholder="Mobile Number" id="txtMobile">
			</div>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-sm-5 offset-md-1">
			<div class="input-group form-control-border">
				<div class="input-group-append input-icon-bg-transparent">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
				</div>
				<input type="Password" class="form-control" placeholder="Password" id="txtPassword">
			</div>
		</div>
		<div class="col-sm-5">
			<div class="input-group form-control-border">
				<div class="input-group-append input-icon-bg-transparent">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
				</div>
				<input type="Password" class="form-control" placeholder="Confirm Password" id="txtConfirmPassword">
			</div>
		</div>
	</div>

	<div class="row mt-4 mb-5">
		<div class="col-sm-5 col-md-5 col-lg-5"></div>
		<div class="col-sm-2 col-md-2 col-lg-2">
			<button type="button" class="btn px-4 m-1 btn-primary" onclick="btnAddNewAdmin()"><b>Add Admin</b>
			</button>
		</div>
		<div class="col-sm-5 col-md-5 col-lg-5">
		</div>
	</div>
</div>

<!--For Sweetalert-->
<script src="src/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="src/css/sweetalert2.min.css">
<link rel="stylesheet" href="src/css/animate.css">
<!--For Sweetalert-->
<script src="src/js/scripts.js"></script>
<script src="src/js/CustomScripts/AddAdmin.js"></script>
<script src="src/Constants/constants.js"></script>

<?php
include ('footer.php');
?>