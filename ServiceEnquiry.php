<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="src/css/serviceEnquiry.css">
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--For Fa Fa-icon-->
	<!--Annimetion Class-->
	<link href="http://taxu.in/lib/animate/animate.min.css" rel="stylesheet">
	<!--Annimetion Class-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="src/js/scripts.js"></script>
	<script src="src/js/CustomScripts/serviceEnquiryScript.js"></script>
	<script src="src/Constants/constants.js"></script>
	</head>

	<body>
		<!-- +Header -->
		<div class="divHeader" w3-include-html="header.html"></div>
		<!-- -Header -->

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
					<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text animated h2Styles" data-wow-delay="0.3s">
						Services Enquiry
					</h2>
				</div>
			</div>

			<div class="row" style="margin-top:20px;">
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><span class="icon-person"></span></span>
						</div>
						<input type="text" class="form-control" placeholder="First Name" id="txtFirstName">
					</div>
				</div>
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><span class="icon-person"></span></span>
						</div>
						<input type="text" class="form-control" placeholder="Last Name" id="txtLastName">
					</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
			</div>

			<div class="row" style="margin-top:20px;">
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><span class="icon-person"></span></span>
						</div>
						<input type="text" class="form-control" placeholder="Email Id" id="txtEmailId">
					</div>
				</div>
				<div class="col-md-4">
					<div class="input-group form-control-border">
						<div class="input-group-append input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><span class="icon-person"></span></span>
						</div>
						<input type="text" class="form-control" placeholder="Phone Number" id="txtPhoneNumber">
					</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
			</div>

			<div class="row" style="margin-top: 20px">
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-sm-8 col-md-8 col-lg-8">
					<div class="input-group form-control-border">
						<textarea class="form-control" placeholder="Type your Query here" id="txtareaQuery"></textarea>
					</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
			</div>

			<div class="row" style="margin-top:40px;">
				<div class="col-sm-5 col-md-5 col-lg-5"></div>
				<div class="col-sm-2 col-md-2 col-lg-2">
					<button class="btn btn-primary px-4 m-1 btn-pill" onClick="btnServiceEnquirySubmit()"><span class="icon-home mr-2"></span>Submit</button>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5"></div>
			</div>
			
			<!-- +Submit your Manuscript -->
			<div class="row" style="margin-top: 50px; margin-bottom:50px;">
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-sm-8 col-md-8 col-lg-8" style="margin-left: 150px;">
					<button style="background-color: #e6eeff;">
						<a href="https://accounts.authorassists.com/enquiryshared" style="color: black; font-size: xx-large;">Submit your Manuscript Now</a>
						<img src="src/Images/Submit.png" style="height:80px;">
					</button>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
			</div>
			<!-- -Submit your Manuscript -->

			<!-- +Footer-->
			<div class="footer" w3-include-html="footer.html"></div>
			<!-- +Footer-->
		</div>


		<!--Model Popup starts-->
		<div class="container">
			<div class="row">
				<!-- <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">open Popup</a> -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
							</div>

							<div class="modal-body">
								<div class="thank-you-pop">
									<img src="src/Images/check.png" alt="" style="height:120px; margin-left: 150px;">
									<h1 style="color: darkorange; font-weight: 800; font-size: -webkit-xxx-large; margin-left: 80px;">Thank You!</h1>
									<p>Your Query has been received and we will get back to you in <b>30 minutes</b>. Please go through our services for additional information. </p>
									<!-- <h3 class="cupon-pop">Your Id: <span>12345</span></h3> -->
									<button class="btn btn-primary btn-pill m-10" style="margin-left:150px; padding-left: 50px; padding-right: 50px;">
										<a href="http://aa.authorassists.com/" style="color:#fff;">OK</a></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Model Popup ends-->
		

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
	</body>
	</html>