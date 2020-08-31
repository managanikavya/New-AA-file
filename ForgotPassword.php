<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="src/css/aboutUs.css">
	<title>Author Assists</title>
	<link rel="shortcut icon" href="src/Images/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="src/css/nouislider.min.css">
    <link rel="stylesheet" href="src/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/fonts/icomoon/style.css">
	<!--bootstrap 4 css-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<!--bootstrap 4 css-->
    <!--For Fa Fa-icon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--For Fa Fa-icon-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="src/js/scripts.js"></script>
    <script src="src/js/CustomScripts/ForgotPassword.js"></script>
    <script src="src/Constants/constants.js"></script>
	</head>
	.
	<body>
		<!-- +Header -->
		<div class="divHeader" w3-include-html="HeaderClient.html"></div>
		<!-- -Header -->

		<div class="container-fluid">
			
			<div class="row" style="margin-top: 40px;">
				<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
					<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text animated h2Styles" data-wow-delay="0.3s">
						Forgot Password
					</h2>
				</div>
			</div>

			<div class="row" style="margin-top: 30px;">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="row">
						<span>
							<strong>Enter your mailId:</strong>
						</span>
						<input type="text" id="txtMail" style="margin-left: 20px; " size=60>
					</div>
					<div class="row offset-md-4" style="margin-top: 20px;">
						<button class="text-center btn btn-primary" id="btnMailSubmit" onclick="btnSubmitMailId()" style="padding: 5px 20px 5px;">Submit</button>	
					</div>
					
				</div>
				<div class="col-sm-3"></div>
				
			</div>

			<!-- +Footer-->
			<div class="footer" w3-include-html="footer.html"></div>
			<!-- +Footer-->	
		</div>

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

        <!--For Sweetalert-->
		<script src="src/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="src/css/sweetalert2.min.css">
		<link rel="stylesheet" href="src/css/animate.css">
		<!--For Sweetalert-->
	</body>
	</html>
