<?php
	include ('AAHeader.php');
?>
<!--bootstrap 4 css-->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<!--bootstrap 4 css-->
<!--For Fa Fa-icon-->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!--For Fa Fa-icon-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<script src="src/js/scripts.js"></script>
<script src="src/js/CustomScripts/ClientLogin.js"></script>
<script src="src/Constants/constants.js"></script>
<div class="container-fluid mb-5">
	<p class="col-sm-6 text-center" id="paraInstruction"><b>Please click on the View Button to view the Project Details</b></p>
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6" style="height:500px;overflow-y: scroll;">
			<table class="table table-responsive table-striped table-bordered table-hover table-sm text-center">
				<thead class="bg-dark text-white">
					<tr>
						<th>Project Id</th>
						<th>Name</th>
						<th>Stage</th>
						<th>Amount</th>
						<th>Action</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody id="tblBodyClientManuscriptDetails">
				</tbody>
			</table>
		</div>
		<div class="col-sm-5 col-md-5 col-lg-5" >
			<!-- <p id="paraInstruction"><b>Please click on the View Button to view the Project Details</b></p> -->
			<div style="height:500px;overflow-y: scroll;display:none;" id="div_manuscriptDetails">
				<p id="paraManuscript" class="text-center"><strong>Your Manuscript Details</strong></p>
				<table class="table table-responsive table-striped table-bordered table-hover text-center" id="tblProjectDetails">
					<thead>
						<tr>
							<th>Item</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody style="background-color: #fff;">
						<tr>
							<td><strong>ProjectId:</strong></td>
							<td id="tdProjectId"></td>
						</tr>
						<tr>
							<td><strong>Project Name:</strong></td>
							<td id="tdProjectName"></td>
						</tr>
						<tr>
							<td><strong>Word Count:</strong></td>
							<td id="tdWordCount"></td>
						</tr>
						<tr>
							<td><strong>Subject:</strong></td>
							<td id="tdSubject"></td>
						</tr>
						<tr>
							<td><strong>Service:</strong></td>
							<td id="tdService"></td>
						</tr>
						<tr>
							<td><strong>Type of Editing:</strong></td>
							<td id="tdEditing"></td>
						</tr>
						<tr>
							<td><strong>Submission Date:</strong></td>
							<td id="tdSubmissionDate"></td>
						</tr>
						<tr>
							<td><strong>Status:</strong></td>
							<td id="tdStatus"></td>
						</tr>
						<tr>
							<td><strong>TAT:</strong></td>
							<td id="tdTAT"></td>
						</tr>
						<tr>
							<td><strong>Delivery Date:</strong></td>
							<td id="tdDeliveryDate"></td>
						</tr>
						<tr>
							<td><strong>Coupon Code:</strong></td>
							<td id="tdCouponCode"></td>
						</tr>
						<tr>
							<td><strong>Discount Percent:</strong></td>
							<td id="tdDiscountPercent"></td>
						</tr>
						<tr>
							<td><strong>Discount Amount:</strong></td>
							<td id="tdDiscountAmount"></td>
						</tr>
						<tr>
							<td><strong>Total Amount:</strong></td>
							<td id="tdTotalAmount"></td>
						</tr>
						<tr>
							<td><strong>Payment Status:</strong></td>
							<td id="tdPaymentStatus"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<button href="#" id="btnPay" class="offset-md-5 btn btn-primary btn-lg text-center mt-3" onClick="btnPayNow()">Pay Now</button>
		</div>
	</div>
</div>
<?php
	include ('footer.php');
?>