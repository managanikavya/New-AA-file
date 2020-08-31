<?php
	include('HeaderClient.php');
	$user_id = $_REQUEST['UserId'];
	// echo $user_id;
?>
<script>
	const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
	const userId = "<?php echo $user_id ?>";
	
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

<div class="container">
	<form class="form-horizontal mb-5" role="form" id="frm_edit_profile">
		<h2>Edit Profile</h2>
		<div class="form-group">
			<label for="FirstName" class="col-sm-3 control-label">First Name</label>
			<div class="col-sm-9">
				<input type="text" id="FirstName" name="FirstName" placeholder="First Name" class="form-control new-validation-form" autofocus>
			</div>
		</div>
		<div class="form-group">
			<label for="LastName" class="col-sm-3 control-label">Last Name</label>
			<div class="col-sm-9">
				<input type="text" id="LastName" name="LastName" placeholder="Last Name" class="form-control new-validation-form" autofocus>
			</div>
		</div>
		<!-- <div class="form-group">
			<label for="Mail" class="col-sm-3 control-label">Email* </label>
			<div class="col-sm-9"> -->
				<input type=hidden id="Mail" name="Mail" placeholder="Mail" class="form-control new-validation-form" name= "email">
			<!-- </div>
		</div> -->
		<div class="form-group">
			<label for="Designation" class="col-sm-3 control-label">Designation*</label>
			<div class="col-sm-9">
				<input type="text" id="Designation" name="Designation" placeholder="Designation" class="form-control new-validation-form">
			</div>
		</div>
		<div class="form-group">
			<label for="Qualification" class="col-sm-3 control-label ">Qualification*</label>
			<div class="col-sm-9">
				<input type="text" id="Qualification" name="Qualification" placeholder="Qualification" class="form-control new-validation-form">
			</div>
		</div>
		<div class="form-group">
			<label for="Username" class="col-sm-3 control-label">Username*</label>
			<div class="col-sm-9">
				<input type="text" id="Username" name="Username" class="form-control new-validation-form" placeholder="Username">
				<input type="hidden" id="UserId" name="UserId" class="form-control" value="<?php echo $user_id; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="Mobile" class="col-sm-3 control-label">Mobile*</label>
			<div class="col-sm-9">
				<input type="phoneNumber" id="Mobile" name="Mobile" placeholder="Phone number" class="form-control new-validation-form">
				<span class="help-block">Your phone number won't be disclosed anywhere </span>
			</div>
		</div>
		<div class="form-group">
			<label for="Qualification" class="col-sm-3 control-label">Zipcode*</label>
			<div class="col-sm-9">
				<input type="text" id="Zipcode" name="Zipcode" placeholder="Zipcode" class="form-control new-validation-form">
			</div>
		</div>
		<div class="form-group">
				<label for="Notes" class="col-sm-3 control-label">Notes*</label>
			<div class="col-sm-9">
				<input type="text" id="Notes" name="Notes" placeholder="Notes" class="form-control new-validation-form">
			</div>
		</div>
		<div class="form-group">
				<label for="Bio" class="col-sm-3 control-label">Bio*</label>
			<div class="col-sm-9">
				<input type="text" id="Bio" name="Bio" placeholder="Bio" class="form-control new-validation-form">
			</div>
		</div>

		<!-- <div class="form-group">
				<label for="Username" class="col-sm-3 control-label">Username*</label>
			<div class="col-sm-9">
				<input type="text" id="Username" name="Username" placeholder="Username" class="form-control validation-form">
			</div>
		</div> -->

		<div class="form-group">
				<label for="Profession" class="col-sm-3 control-label">Profession*</label>
			<div class="col-sm-9">
				<input type="text" id="Profession" name="Profession" placeholder="Profession" class="form-control new-validation-form">
			</div>
		</div>

		<div class="form-group">
				<label for="Experience" class="col-sm-3 control-label">Experience*</label>
			<div class="col-sm-9">
				<input type="text" id="Experience" name="Experience" placeholder="Experience" class="form-control new-validation-form">
			</div>
		</div>

		<div class="form-group">
				<label for="TotalProjects" class="col-sm-3 control-label">TotalProjects<font color="red">*</font></label>
			<div class="col-sm-9">
				<input type="text" id="TotalProjects" name="TotalProjects" placeholder="Total Projects" class="form-control new-validation-form">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<span class="help-block">*Required fields</span>
			</div>
		</div>
		<button class="btn btn-primary btn-block">Edit</button>
	</form> 
</div>
<script src="src/Constants/constants.js"></script>
<script src="src/js/CustomScripts/editProfile.js"></script>

<?php
   include('footer.php');
?>

<style>
	body {
	 /*background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;*/
	background-size: cover;
}

*[role="form"] {
	max-width: 530px;
	padding: 15px;
	margin: 0 auto;
	border-radius: 0.3em;
	background-color: #f2f2f2;
}

*[role="form"] h2 { 
	font-family: 'Open Sans' , sans-serif;
	font-size: 40px;
	font-weight: 600;
	color: #000000;
	margin-top: 5%;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 4px;
}


</style>