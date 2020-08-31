<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="src/css/Registration.css">
		<title>Author Assists</title>
		<link rel="shortcut icon" href="src/Images/logo.png">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel="stylesheet" href="src/css/nouislider.min.css">
		<link rel="stylesheet" href="src/css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" href="src/css/style.css">
		<link rel="stylesheet" href="src/css/bootstrap.min.css">
		<link rel="stylesheet" href="src/fonts/icomoon/style.css">
		<!--bootstrap 4 css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!--bootstrap 4 css-->
		<!--For Fa Fa-icon-->
		<link rel="stylesheet" href="src/css/fa/all.css">
		<script href="src/js/fa/all.js"></script>
		<!--For Fa Fa-icon-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="src/js/scripts.js"></script>
		<script src="src/js/CustomScripts/Registration.js"></script>
		<script src="src/Constants/constants.js"></script>
	</head>

	<body>
		<!-- +Header -->
		<div class="divHeader" w3-include-html="HeaderClient.html"></div>
		<!-- -Header -->

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
					<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text animated h2Styles" data-wow-delay="0.3s">
						Registration
					</h2>
				</div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="First Name" id="txtFirstName">
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span></span>
						</div>
						<input type="text" class="form-control" placeholder="Last Name" id="txtLastName">
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Email" id="txtEmail">
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Mobile Number" id="txtMobile">
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" id="txtPassword">
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Confirm Password" id="txtConfirmPassword">
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-address-card"></i></span>
						</div>
						<select class="form-control" placeholder="Designation" id="ddlDesignation">
							<option value="0">--Select your Designation--</option>
							<option value="1">Student</option>
							<option value="2">Researcher</option>
							<option value="3">Lecturer</option>
							<option value="4">Head Of Department</option>
							<option value="5">Author</option>
							<option value="6">Scientist</option>
							<option value="7">Professor</option>
							<option value="8">Other</option>
						</select>
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="If other, please specify" id="txtDesignationOther" disabled="disabled">
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-equals"></i></span>
						</div>
						<select class="form-control" placeholder="Educational Qualification" id="ddlQualification">
							<option value="0">--Select your Qualification--</option>
							<option value="1">Graduate</option>
							<option value="2">Post- Graduate</option>
							<option value="3">PhD</option>
							<option value="4">Other</option>
						</select>
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-equals"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="If other, please specify" id="txtDesignationOther" disabled="disabled">
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
						</div>
						<select class="form-control" placeholder="Where did you heare about us" id="ddlHear">
							<option value="0">--Where did you hear about us--</option>
							<option value="1">Google</option>
							<option value="2">Social Media</option>
							<option value="3">Newsletter</option>
							<option value="4">Other</option>
						</select>
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="If other, please specify" id="txtHearOther" disabled="disabled">
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-thumbtack"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Zip Code" id="txtZipCode">
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-sticky-note"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Notes" id="txtNotes">
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						</div>
						<select class="form-control" placeholder="Country" id="ddlCountry">
						</select>
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"></i></span>
						</div>
						<select class="form-control" placeholder="Membership" id="ddlMembership" onChange="OpenModal()">
							<option>--Select the Membership option--</option>
							<option data-toggle="modal" data-target="#ModalBasicMembership" value="1">Basic Membership</option>
							<option data-toggle="modal" data-target="#ModalSilverMembership" value="2">Silver Membership</option>
							<option data-toggle="modal" data-target="#ModalGoldMembership" value="3">Gold Membership</option>
							<option data-toggle="modal" data-target="#ModalPlatinumMembership" value="4">Platinum Membership</option>
						</select>
					</div>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row" id="divRowTerms">
				<input type="checkbox" id="chkTerms" onclick="chkTermsClick()"><b>I agree to the terms and conditions of registration</b><br>
			</div>

			<div class="row" id="divRowMembership">
				<input type="checkbox" id="chkMembership" onclick="chkMembershipClick()"><b>I understand the terms and conditions of Membership</b>	
			</div>

			<div class="row" style="margin-top: 50px; margin-bottom: 50px;">
				<div class="col-sm-5 col-md-5 col-lg-5"></div>
				<div class="col-sm-2 col-md-2 col-lg-2">
					<button type="button" class="btn btn-info btn-lg" id="btnRegistrationSubmit" onclick="btnRegistration()" disabled="disabled">Register</button>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5"></div>
			</div>

			<!-- +Footer-->
			<div class="footer" w3-include-html="footer.html"></div>
			<!-- +Footer-->

			<script>
				includeHTML();
			</script>

			<!--+Zoho chat widget Soumee - 27-09-2019-->
			<script type="text/javascript">
			var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||
			{widgetcode:"1c167f96e81a194374e35b1ea7b4cb558ab1c9806ed8fb7318d3d8772bbc53cae6319b104bcecb8c1a0be0fb925599abd45688b0b779b00101547b5bd8012454", values:{},ready:function(){}};
			var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
			s.src="https://salesiq.zoho.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
			</script>
			<!--+Zoho chat widget Soumee - 27-09-2019-->
		</div>

		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalBasicMembership">
			Launch demo modal
		</button> -->

		<!-- +Basic Membership Modal -->
		<div class="modal fade" id="ModalBasicMembership" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="width:900px;">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Membership level</th>
									<th>Time(months)</th>
									<th>Price</th>
									<th>Privileges</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Basic</td>
									<td></td>
									<td>$0.00</td>
									<td>- One re-edit of article rejected by publishers on account of unsatisfactory language, with no changes made to the edited article.<br />- No additional discounts <br />- Customer service response as per the queue.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- -Basic Membership Modal -->

		<!-- +Silver Membership Modal -->
		<div class="modal fade" id="ModalSilverMembership" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="width:900px;">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Membership level</th>
									<th>Time(months)</th>
									<th>Price</th>
									<th>Privileges</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Silver</td>
									<td>3</td>
									<td>$10.00</td>
									<td>- One re-edit with 5% changes made within the manuscript<br />- Additional discount of $0.001/word<br />- Priority on response from customer sevice team</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- -Silver Membership Modal -->

		<!-- +Gold Membership Modal -->
		<div class="modal fade" id="ModalGoldMembership" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="width:900px;">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Membership level</th>
									<th>Time(months)</th>
									<th>Price</th>
									<th>Privileges</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Gold</td>
									<td>6</td>
									<td>$18.00</td>
									<td>- One re-edit with 10% changes made within the manuscript<br />- Additional discount of $0.002/word<br />- Priority on response from customer sevice team</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- -Gold Membership Modal -->

		<!-- +Platinum Membership Modal -->
		<div class="modal fade" id="ModalPlatinumMembership" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="width:900px;">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Membership level</th>
									<th>Time(months)</th>
									<th>Price</th>
									<th>Privileges</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Platinum</td>
									<td>12</td>
									<td>$25.00</td>
									<td>- One re-edit with 15% changes made within the manuscript<br />- Additional discount of $0.004/word<br />- Priority on response from customer sevice team</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- -Platinum Membership Modal -->

		<!--For Sweetalert-->
		<script src="src/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="src/css/sweetalert2.min.css">
		<link rel="stylesheet" href="src/css/animate.css">
		<!--For Sweetalert-->
	</body>
</html>