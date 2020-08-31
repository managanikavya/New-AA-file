<!doctype html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="src/css/aa.css">
	<link rel="stylesheet" href="src/css/header.css">
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
	<script src="src/js/CustomScripts/headerScript.js"></script>
	<script src="src/Constants/constants.js"></script>
	</head>

	<body>
		<header>
			<div class="bg-image" style="background-image: url('src/Images/hero_1.jpg')">
				<nav class=" px-4 navbar navbar-expand-lg navbar-dark mb-4">
					<a class="navbar-brand" href="#">
						<img src="src/Images/logo.png" class="NavbarLogo"/>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown4" aria-controls="navbarNavDropdown4" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown4">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">								
								<a class="btn nav-link" style="font-weight:800;" href="#" data-toggle="modal" data-target="#exampleModalCenter">
									<!-- https://accounts.authorassists.com/login -->
									<i class="fa fa-sign-in" aria-hidden="true"></i>  Login
								</a>
							</li>
							<li class="nav-item">
								<a class="btn nav-link" style="font-weight:800;" href="https://accounts.authorassists.com/enquiryshared">
									<i class="fa fa-envelope-open" aria-hidden="true"></i>  Quote
								</a>
							</li>
							<li class="nav-item">
								<a class="btn nav-link" style="font-weight:800;" href="https://blog.authorassists.com/">
										<i class="fa fa-file" aria-hidden="true"></i>  Blog
								</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-7 mx-auto text-center align-self-center">
							<h1 class="font-weight-bold mb-0" style="font-family: serif;padding-bottom: 20px;color: #EC7A09;">Where becoming is better than being</h1>
							<p><a href="https://accounts.authorassists.com/enquiryshared" class="btn btn-primary px-4 py-3"><b style="font-size: x-large;">Get a Quote</b></a></p>
						</div>
					</div>
				</div>
			</div>
		</header>


		<!-- +Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content rounded-0">
					<div class="modal-header" style="background-color: #E67A06;">
						<h5 class="modal-title" id="exampleModalCenterTitle" style="color:#fff; margin-left: 170px; margin-bottom:10px;">Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><span class="icon-close2" style="color:#fff;"></span></span>
						</button>
					</div>
					<div class="modal-body">
						<img src="src/Images/user.png" style="height:100px; width: 130px; margin-left: 130px; margin-bottom: 20px;" />
						<!-- +Username -->
						<div class="input-group">
							<div class="input-group-prepend input-group-pill input-icon-bg-transparent">
								<span class="input-group-text" id="basic-addon1"><span class="icon-person"></span></span>
							</div>
							<input type="text" class="form-control pl-0 border-left-0 form-pill" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="txtUserName">
						</div>
						<!-- -Username -->

						<!-- +Password -->
						<div class="input-group" style="margin-top: 20px;">
							<div class="input-group-prepend input-group-pill input-icon-bg-transparent">
								<span class="input-group-text" id="basic-addon1"><span class="icon-lock"></span></span>
							</div>
							<input type="password" class="form-control pl-0 border-left-0 form-pill" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="txtPassword">
						</div>
						<!-- -Password -->

						<!-- +Submit Button -->
						<div class="input-group" style="margin-top: 20px;">
							<div class="input-group-prepend input-group-pill input-icon-bg-transparent">
								<button type="button" class="pl-0 border-left-0 form-pill btn btn-info" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" onClick="btnLogin()"style="margin-left: 100px; background-color: #053580; padding-left: 40px; width: 250px;">Submit</button>
							</div>							
						</div>
						<!-- -Submit Button -->

						<!-- <div class="row"> -->
							<a href="ForgotPassword.html" style="margin-left:20px;">Forgot Password</a><br>
							<a href="http://aa.authorassists.com/Registration.html" style="margin-left:20px;">New User? Register here</a>
						<!-- </div> -->
					</div>
					

					
					
				</div>
			</div>
		</div>
		<!-- -Modal -->


		<!--For Sweetalert-->
		<script src="src/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="src/css/sweetalert2.min.css">
		<link rel="stylesheet" href="src/css/animate.css">
		<!--For Sweetalert-->
	</body>