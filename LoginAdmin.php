<?php
	include('HeaderAdmin.php');
?>

<div id="loading-bar-spinner" class="spinner" style="display:none;">
	<div class="spinner-icon"></div>
</div>

<div class="container-fluid mb-5">
	<div class="dropdown" style="margin-bottom: 20px;">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter on Payment Status
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="#" onclick="ProjectsFiltering(1)">Verification Pending</a></li>
			<li><a href="#" onclick="ProjectsFiltering(2)">Payment Done</a></li>
			<li><a href="#" onclick="ProjectsFiltering(3)">Awaiting payment</a></li>
		</ul>
	</div>

	<div class="col-sm-12 col-md-12 col-lg-12" style="height:440px;">
		<table class="table table-striped table-bordered table-hover table-sm text-center" id="tblProjectDetails">
			<thead class="bg-dark text-white">
				<tr>
					<th>Project</th>
					<th>Email</th>
					<th>Submission Date</th>
					<!-- <th>Delivery Date</th> -->
					<th>Payment Status</th>
					<th>Edited</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tblBodyProjectDetails">
			</tbody>
		</table>
		<div class="collapse" id="collapseExample">
			<div class="row">
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="Project Name" id="txtProjectName">
					</div>
				</div>

				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="Subject" id="txtSubject">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="Service" id="txtService">
					</div>
				</div>

				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="Type Of Service" id="txtTypeOfService">
					</div>
				</div>							
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="Status" id="txtStatus">
					</div>
				</div>

				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="Word Count" id="txtWordCount">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="Date" class="form-control" placeholder="Submission Date" id="dateSubmissionDate">
					</div>
				</div>

				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="Stage" id="txtStage">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="text" class="form-control" placeholder="TAT" id="txtTAT">
					</div>
				</div>

				<div class="col-md-4">
					<div class="input-group form-control-border">
						<input type="Date" class="form-control" placeholder="Delivery Date" id="dateDeliveryDate">
					</div>
				</div>
			</div>
		</div>
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

<script src="src/js/jquery-stickytable.js"></script>
<link rel="stylesheet" type="text/css" href="src/css/jquery-stickytable.css">
<script src="src/js/CustomScripts/AdminLogin.js"></script>
<script src="src/Constants/constants.js"></script>
<script>
	$(document).ready(function(){
		$('#tblProjectDetails').stickyTable({overflowy: true});
	});
</script>


<style>
	#loading-bar-spinner.spinner 
	{
		left: 50%;
		margin-left: -20px;
		top: 50%;
		margin-top: -20px;
		position: absolute;
		z-index: 19 !important;
		animation: loading-bar-spinner 1000ms linear infinite;
	}

	#loading-bar-spinner.spinner .spinner-icon 
	{
		width: 90px;
		height: 90px;
		border:  solid 8px transparent;
		border-top-color:  #172A6A !important;
		border-left-color: #172A6A !important;
		border-radius: 100%;
	}

	@keyframes loading-bar-spinner 
	{
		0%   { transform: rotate(0deg);   transform: rotate(0deg); }
		100% { transform: rotate(360deg); transform: rotate(360deg); }
	}
</style>
<script>
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