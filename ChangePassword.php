<?php
	include('HeaderClient.php');
	// $user_id = $_REQUEST['UserId'];
	// echo $user_id;
?>
<script>
	const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
	// const userId = "<?php //echo $user_id ?>";
	
	$(document).ready(function(){
		var UserID = "<?php echo $_SESSION['UserId']; ?>";
		if(UserID == "")
		{
			$("#btnLogin").show();
			$("#btnLogout").hide();
		}
		else
		{
			$("#btnLogout").show();
			$("#btnLogin").hide();
		}
	});
</script>



		<div class="container-fluid">
			<div class="row" style="margin-top: 50px; margin-bottom: 20px;">
				<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
					<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3  black-text animated h2Styles" data-wow-delay="0.3s">
						Change Password
					</h2>
				</div>
			</div>

			<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Old Password" id="pwrdOld">
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
			</div>

			<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="New Password" id="pwrdNew">
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
			</div>

			<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Confirm Password" id="pwrdConfirm" onchange="verifyPassword()">
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
			</div>

			<div class="row" style="margin-top: 30px; margin-bottom: 30px">
				<div class="col-sm-5"></div>
				<div class="col-sm-2">
					<button class="btn btn-primary" onclick="ChangePassword()">Update Password</button>
				</div>
				<div class="col-sm-5"></div>				
			</div>
		</div>
<?php
   include('footer.php');
?>



<!--For Sweetalert-->
<script src="src/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="src/css/sweetalert2.min.css">
<link rel="stylesheet" href="src/css/animate.css">
<!--For Sweetalert-->
<script src="src/Constants/constants.js"></script>
<script src="src/js/CustomScripts/ChangePassword.js"></script>