<?php
	include('HeaderAdmin.php');
	$projectCode = $_REQUEST['ProjectCode'];
?>

<style>
	.label {
  color: white;
  padding: 8px;
}

.success {color: #003471;} /* Green */
.danger {color: #AC0015;} /* Orange */

.dotred {
  height: 15px;
  width: 15px;
  background-color: #AC0015;
  border-radius: 50%;
  display: inline-block;
}
.dotblue {
  height: 15px;
  width: 15px;
  background-color: #004FAC;
  border-radius: 50%;
  display: inline-block;
}
.dotgreen {
  height: 15px;
  width: 15px;
  background-color: #1ED529;
  border-radius: 50%;
  display: inline-block;
}
</style>

	<script src="src/js/scripts.js"></script>
	<script src="src/js/CustomScripts/ProjectDetails.js"></script>
	<script src="src/Constants/constants.js"></script>

		<div class="container-fluid">
			<h1 class="text-center">Edit Project Details</h1>
			<div class="row">
				<div class="col-md-4">
					<span class="dotred"></span>  Cannot be changed
				</div>
				<div class="col-md-4">
					<span class="dotblue"></span>  Has been changed
				</div>
				<div class="col-md-4">
					<span class="dotgreen"></span>  Not changed yet
				</div>
				
			</div>
			<div class="row mt-3">
				<div class="col-md-4">
					<label class="label danger">PROJECT ID</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-qrcode"></i></span>
						</div>
						<input type="text" class="form-control border border-danger" placeholder="Project Code" id="txtProjectCode" disabled>
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">PROJECT NAME</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-signature"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Project Name" id="txtProjectName">
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">WORD COUNT</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="far fa-file-word"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Word Count" id="txtWordCount" onchange = "setPrice()">
					</div>
				</div>
			</div>

			<div class="row mt-3"> <!-- style="margin-top:25px; margin-bottom:25px;" -->
				<div class="col-md-4">
					<label class="label success">SUBJECT</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-book-reader" onclick="enableSubject()"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Subject" id="txtSubject" disabled>
						<select class="form-control border border-primary" placeholder="Subject" id="ddlSubject" onchange="SubjectChangeValues()">
							<!-- onclick ="fetchAllSubjects()" -->
							
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">SERVICE</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-users-cog" onclick="enableService()"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Service" id="txtService" disabled>
						<select class="form-control border border-primary" placeholder="Service" id="ddlService" onchange="fetchServiceTypes(); serviceChangeValues()">

						</select>
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">SERVICE TYPE</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-nib" onclick="enableServiceTypes()"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Service Types" id="txtServicetypes" disabled>
						<select class="form-control border border-primary" placeholder="Type Of Editing" id="ddlEditingType" onchange="serviceTypeValue()">

						</select>
					</div>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-md-4">
					<label class="label danger">SUBMISSION DATE</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
						</div>
						<input type="text" class="form-control border border-danger" placeholder="Submission Date" id="txtSubmissionDate" disabled>
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">TAT</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-hourglass-start"></i></span>
						</div>
						<select class="form-control border border-success" placeholder="Turn Around Time" id="txtTurnAroundTime" onchange = "SetDeliveryDate()">
							<option value="5">5 Days</option>
							<option value="3">3 Days</option>
							<option value="2">2 Days</option>
							<option value="0">5+ Days</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<label class="label danger">DELIVERY DATE</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-check"></i></span>
						</div>
						<input type="text" class="form-control  border border-danger" placeholder="Delivery Date" id="txtDeliveryDate" disabled="disabled">
					</div>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-md-4">
					<label class="label success">PROJECT STATUS</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-info" onclick="enableProjectStatus()"></i></span>
						</div>
						<input type="text" class="form-control border border-danger" placeholder="Project Status" id="txtStatus" disabled="disabled">
						<select class="form-control border border-primary" placeholder="Subject" id="ddlProjectStatus">
							<option value="Pending">Pending</option>
							<option value="Confirmed">Confirmed</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">COUPON CODE</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-europe"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Coupon Code" id="txtCouponCode">
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">DISCOUNT PERCENT</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-percent"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Discount Percent" id="txtDiscountPercent">
					</div>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-md-4">
					<label class="label success">DISCOUNT AMOUNT</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Discount Amount" id="txtDiscountAmount" onchange="setPrice()">
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">TOTAL AMOUNT</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-calculator"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Total Amount" id="txtTotalAmount">
					</div>
				</div>
				<div class="col-md-4">
					<label class="label success">PAYMENT STATUS</label>
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-asterisk" onclick="enablePaymentStatus()"></i></span>
						</div>
						<input type="text" class="form-control border border-success" placeholder="Payment Status" id="txtPaymentStatus" disabled>
						<select class="form-control border border-primary" placeholder="Payment Status" id="ddlPayStatus">
							<option value="Verification pending">Verification Pending</option>
							<option value="Awaiting payment">Awaiting Payment</option>
							<option value="Payment Done">Payment Done</option>
							<option value="Work in process">Work in Progress</option>
							<option value="Completed">Completed</option>
							<option value="Ready for download">Ready To Download</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row mb-5 mt-5">				
				<div class="col-sm-4 col-md-4 col-lg-4 text-center offset-md-8">
					<button type="button" class="btn px-4 m-1 btn-primary" onclick="submitProjectDetails()"><b>Submit</b>
					</button>

					<a href="AssignEditor.php?ProjectCode=<?php echo $projectCode; ?>" target="_blank">
					<button type="button" class="btn px-4 m-1 btn-primary" id="btnAssignToEditors"><b>Assign to Editors</b>
					</button></a>	
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