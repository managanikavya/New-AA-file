<?php
	include('HeaderClient.php');
?>
<script>
	const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
	const FirstName = "<?php echo $_SESSION['FirstName']; ?>";
	const LastName = "<?php echo $_SESSION['LastName']; ?>";
	const CountryId = "<?php echo $_SESSION['CountryId']; ?>";
	// alert(UserIDClient);
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
	<div class= "row mt-5">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 black-text animated h2Styles" data-wow-delay="0.3s">
				Manuscripts
			</h2>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-md-2 offset-md-9">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UploadNewProjectModal">Upload new Project</button>
		</div>
	</div>

	<!-- <h3 class="text-center">Project Details</h3> -->
	
	<div class="row mb-5">
		<div class="col-md-12" style="height:500px;overflow-y: scroll;">
			<table class="table table-responsive table-striped table-bordered table-hover table-sm text-center">
				<thead class="table-primary text-black">
					<tr>
						<th>Project Id</th>
						<th>Submitted</th>
						<th>Name</th>
						<th>Service</th>
						<th>Edit Type</th>
						<th>Stage</th>
						<th>Discount</th>
						<th>Amount</th>
						<th>TAT</th>
						<th>Action</th>
						<th>Query</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody id="tblBodyClientManuscriptDetails">
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Manuscript Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<div class="modal-body">
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
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button href="#" id="btnPay" class="offset-md-5 btn btn-primary text-center" onClick="btnPayNow()">Pay Now</button>
		</div>
		</div>
	</div>
</div>
<!-- Modal -->

<div class="modal fade" id="UploadNewProjectModal" tabindex="-1" role="dialog" aria-labelledby="UploadNewProjectModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<!--Content-->
	<div class="modal-content card card-image" style="background-image: url('src/Images/ManuscriptUpload.jpg');">
	  <div class=" rgba-stylish-strong py-5 px-5 z-depth-4">
		<!--Header-->
		<div class="modal-header text-center pb-4">
		  <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel">
				<a
				  class="green-text text-light font-weight-bold"><strong>Upload</strong>
				</a>
			</h3>
		  <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<!--Body-->
		<div class="modal-body">
			<form id="frmUploadManuscript">
		  		<!--Body-->
		  		<div class="md-form mb-3">
					<label data-error="wrong" data-success="right" for="ddlServices" class="text-light">Service</label>
					<select id="ddlServices" name="ddlServices" class="form-control validation-form white-text">
						<option value="English Editing">Select a Service</option>
						<option value="English Editing">English Editing</option>
						<option value="Translation">Translation</option>
						<option value="Book Editing">Book Editing</option>
					</select>
					<input type="hidden" name="txtEmail" value="<?php echo $_SESSION['UserId']; ?>">

					<label data-error="wrong" data-success="right" for="Form-pass5" class="text-light">Word Count</label>
					<input type="number" id="txtWordCount" name="txtWordCount" class="form-control validation-form white-text" autocomplete="Off" placeholder="Enter the word Count of the manuscript">
		  		</div>

		  		<div class="md-form pb-3">
					<label data-error="wrong" data-success="right" for="Form-pass5" class="text-light">TAT</label>
					<select id="ddltat" name="ddltat" class="form-control validation-form white-text"  onchange="priceCalc()">
							<option value="7">Select a TAT</option>
							<option value="3">3 days</option>
							<option value="5">5 days</option>
							<option value="7">7 days</option>
						</select>
				</div>
				<div class="md-form pb-3">
					<label data-error="wrong" data-success="right" for="Form-pass5" class="text-light">Price</label>
					<input type="text" id="manuscriptPrice" name="manuscriptPrice" class="form-control validation-form white-text" disabled>
					 <span class="text-white" style="font-size: small;">*Actual Price may vary depending on the Membership and the Discounts available</span>	
				  </div>


		  <div class="md-form pb-3">
			<label data-error="wrong" data-success="right" for="Form-pass5" class="text-light">Upload Manuscript</label>
			<input type="file" id="fileManuscript" name="fileMain" class="form-control validation-form white-text">			
		  </div>

		  <div class="md-form pb-3">
			<label data-error="wrong" data-success="right" for="Form-pass5" class="text-light">Upload Reference File</label>
			<input type="file" id="fileReference" name="fileReference" class="form-control white-text">			
		  </div>

		  <!--Grid row-->
		  <div class="row d-flex align-items-center mb-4">

			<!--Grid column-->
			<div class="text-center mb-3 col-md-12">
			  <button class="btn btn-primary btn-block btn-rounded z-depth-1">Upload</button>
			</div>
			<!--Grid column-->

		  </div>
		</form>
		<script>
			$(document).ready(function(){
				$("#frmUploadManuscript").submit(function(){
					event.preventDefault();
					var isValid = true;
					$(".validation-form").each(function()
					{
						if($(this).val() == "")
						{
							$(this).addClass("is-invalid");
							isValid = false;
						}
						else
						{
							$(this).removeClass("is-invalid");
						}
					});
					if(isValid == true)
					{
						var data_all = new FormData(this);

						$.ajax
						({
							type: "POST",
							url: "php_action/UploadFiles.php",
							dataType: "json",
							data: data_all,
							contentType:false,          // The content type used when sending data to the server.
							cache:false,                // To unable request pages to be cached
							processData:false,          // To send DOMDocument or non processed data file it is set to false
							success: function (response) 
							{
								console.log(response);
								if(response.IsOK == true)
								{
									InsertManuscriptDetails(response.ResponseObjectFolder,response.ResponseObjectMainFile,response.ResponseObjectreferenceFile)
								}
								else
								{
									alert(response.Message);
								}
							},
							error: function (xhr, ajaxOptions, thrownError) 
							{
								//console.log(thrownError);
							}
						});
					}
				});
			});

			function priceCalc()
			{
				var services = $("#ddlServices").val();
				var tat = $("#ddltat").val();
				var wordCount = $("#txtWordCount").val();
				// alert(wordCount);

				var price = "0";
				var tat = tat;

				if(services == "English Editing")
				{
					// alert(services);
					if(tat=="5")
					{
						var basicPrice = "0.035";
						var advancedPrice = "0.06";
						var premiumPrice = "0.08";
					}
					else if(tat=="3")
					{
						var basicPrice = "0.04";
						var advancedPrice = "0.07";
						var premiumPrice = "0.09";
					}
					else if(tat="2")
					{
						var basicPrice = "0.05";
						var advancedPrice = "0.08";
						var premiumPrice = "0.12";
					}
				}
				else if(services == "Book Editing")
				{
					// alert(services);
					if(tat=="5")
					{
						var basicPrice = "0.035";
						var advancedPrice = "0.06";
						var premiumPrice = "0.08";
					}
					else if(tat=="3")
					{
						var basicPrice = "0.04";
						var advancedPrice = "0.07";
						var premiumPrice = "0.09";
					}
					else if(tat="2")
					{
						var basicPrice = "0.05";
						var advancedPrice = "0.08";
						var premiumPrice = "0.12";
					}
				}
				else if(services == "Translation")
				{
					// alert(services);
					if(tat=="5")
					{
						var basicPrice = "0.035";
						var advancedPrice = "0.06";
						var premiumPrice = "0.08";
					}
					else if(tat=="3")
					{
						var basicPrice = "0.04";
						var advancedPrice = "0.07";
						var premiumPrice = "0.09";
					}
					else if(tat="2")
					{
						var basicPrice = "0.05";
						var advancedPrice = "0.08";
						var premiumPrice = "0.12";
					}
				}
				
				var price = wordCount * basicPrice;
				$("#manuscriptPrice").val("$"+price);
			}
		</script>
		  <!--Grid row-->

		  <!--Grid row-->
		  <!-- <div class="row"> -->

			<!--Grid column-->
			<!-- <div class="col-md-12 white-text">
				<p class="font-small text-light d-flex justify-content-end">Don't have an account? 
					<a href="SignUp.php" class="text-light ml-1 font-weight-bold">Sign Up</a>
				</p>
				<p class="font-small text-light d-flex justify-content-end">Forgot your Password? 
					<a href="#" class="text-light ml-1 font-weight-bold">Click here</a>
				</p>
			</div> -->
			<!--Grid column-->

		  <!-- </div> -->
		  <!--Grid row-->

		</div>
	  </div>
	</div>
	<!--/.Content-->
  </div>
</div>

<script src="src/Constants/constants.js"></script>
<script src="src/js/CustomScripts/ClientLogin.js"></script>

<?php
	include('footer.php');
?>
