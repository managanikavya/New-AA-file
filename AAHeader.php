<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Author Assists</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="src/js/CustomScripts/headerScript.js"></script>
		<link rel="stylesheet" href="src/css/bootnavbar.css">
		<link rel="shortcut icon" href="src/Images/logo.png">
		<!-- <link rel="stylesheet" href="src/css/home.css"> -->
	</head>

	<body style=""> <!-- overflow: hidden; -->
		<div class="jumbotron text-justify mb-0 pt-2" style="background: -webkit-linear-gradient(left, #0072ff, #00c6ff); height: 5px;">
			<div class="row text-white">
				<div class="col-sm-10 col-md-10 col-lg-10">
					<h4>Author Assists offers up to 50% off on Editing Services!</h4>
					<h5>Avail Translation Services & Get Flat 25% off on Editing Services</h5>
				</div>

				<div class="col-sm-2 col-md-2 col-lg-2">
					<a href="SubmitManuscript.php" target="_blank">
						<h4 class="text-white"><u>Avail Now >></u></h4></a>
				</div>
			</div>
		</div>
		<header class="mb-2">
			<div class="jumbotron text-justify mb-0 mt-5 pt-3" id="divDiscountBanner" style="background: -webkit-linear-gradient(left, #0072ff, #00c6ff); height: 5px;">
				<div class="row text-white">
					<div class="col-sm-10 col-md-10 col-lg-10">
						<h4>Author Assists offers up to 50% off on Editing Services!</h4> 
						<h5>Avail Translation Services & Get Flat 25% off on Editing Services</h5>
					</div>

					<div class="col-sm-2 col-md-2 col-lg-2">
						<a href="SubmitManuscript.php" target="_blank">
							<h4 class="text-white"><u>Avail Now >></u></h4></a>
					</div>
				</div>
			</div>
			<div>
				<nav class="px-4 navbar fixed-top navbar-expand-lg mb-4 navbar-fixed bg-light navbar-toggler" id="main_navbar">
					<a class="navbar-brand" href="AA.php">
						<img src="src/Images/logo.png" class="NavbarLogo" style="height: 100px;" />
					</a>
					
					<div class="collapse navbar-collapse offset-md-2 mt-6" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="AA.php">
									<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-6" id="aHomeButton">Home</button><span class="sr-only"></span>
								</a>
							</li>

							<li class="nav-item dropdown" id="liServices">
								<div class="nav-link">
									<a class="btn px-4 m-1 btn-pill btn-outline-primary ml-8 nav-link dropdown-toggle" href="EnglishEditing.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Services
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li>
											<a class="dropdown-item" href="EnglishEditing.php">
												<i class="fa fa-list" aria-hidden="true"></i> English Editing
											</a>
											<!-- <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-stack-exchange" aria-hidden="true"></i> English Editing</a> -->
											<!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
												<a class="dropdown-item" href="#"><i class="fa fa-table"></i> Standard Editing</a>
												<a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Advanced Editing</a>
												<a class="dropdown-item" href="#"><i class="fa fa-apple"></i> Substantive Editing</a>
											</ul> -->
										</li>
										<li class="nav-item dropdown">
											<a class="dropdown-item" href="TranslationServices.php">
												<i class="fa fa-exchange" aria-hidden="true"></i> Translation Services
											</a>
											
										</li>
										<li>
											<a class="dropdown-item" href="BookEditing.php">
												<i class="fa fa-book" aria-hidden="true"></i> Book Editing Services
											</a>
											<!-- <a class="dropdown-item dropdown-toggle" href="BookEditing.php" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-refresh" aria-hidden="true"></i> Book Editing Services</a> -->
												<!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
												<a class="dropdown-item" href="#"><i class="fa fa-table"></i> Standard Book Editing</a>
												<a class="dropdown-item" href="#"><i class="fa fa-apple"></i> Substantive Book Editing</a>
											</ul> -->
										</li>
									</ul>
								</div>
							</li>

							<li class="nav-item">
								<div class="dropdown nav-link">
									<button class="btn px-4 m-1 btn-pill btn-outline-primary ml-8 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Subjects
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="MedicalScience.php">Medical Science</a>
										<a class="dropdown-item" href="LifeScience.php">Life Science</a>
										<a class="dropdown-item" href="PhysicalScience.php">Physical Science</a>
										<a class="dropdown-item" href="SocialScience.php">Social Science</a>
										<a class="dropdown-item" href="BusinessEconomics.php">Business Economics</a>
									</div>
								</div>
							</li>
							
							<li class="nav-item">
							<a class="nav-link" href="Pricing.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnPricing">Pricing</button>
							</a>
							</li>

							<li class="nav-item">
							<a class="nav-link" href="Membership.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnMembership">Membership</button>
							</a>
							</li>

							<li class="nav-item">
							<a class="nav-link" href="AboutUs.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnAbout">About</button>
							</a>
							</li>

							<li class="nav-item">
							<!-- <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter"> -->
								<a href="Login.php" class="nav-link" target="_blank">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnLogin" >Login</button>
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnLogout" style="display:none;" onclick="btnLogout()">Logout</button>
							</a>
							</li>
						</ul>
					</div>
					

				</nav>
			</div>
		</header>
	<script src="src/js/bootnavbar.js" ></script>
	<script>
		$(function () {
			$('#main_navbar').bootnavbar();
		});
	</script>

	<!-- +Modal -->
		
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content card card-image" style="background-image: url('src/Images/Login.png');">
	  <div class=" rgba-stylish-strong py-5 px-5 z-depth-4">
		<div class="modal-header text-center pb-4">
		  <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel">
				<a
				  class="green-text text-light font-weight-bold"><strong>Login</strong>
				</a>
			</h3>
		  <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <div class="md-form mb-5">
			<label data-error="wrong" data-success="right" for="Form-email5" class="text-light" placeholder="Username">Your email</label>
			<input type="email" id="txtUserName" class="form-control validate white-text">
			
		  </div>

		  <div class="md-form pb-3">
			<label data-error="wrong" data-success="right" for="Form-pass5" placeholder="Password" class="text-light">Your password</label>
			<input type="password" id="txtPassword" class="form-control validate white-text">			
		  </div>

		  <div class="row d-flex align-items-center mb-4">
			<div class="text-center mb-3 col-md-12">
			  <button type="button" class="btn btn-primary btn-block btn-rounded z-depth-1" onClick="btnLogin()">Login</button>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 white-text">
				<p class="font-small text-light d-flex justify-content-end">Don't have an account? 
					<a href="SignUp.php" class="text-light ml-1 font-weight-bold">Sign Up</a>
				</p>
				<p class="font-small text-light d-flex justify-content-end">Forgot your Password? 
					<a href="#" class="text-light ml-1 font-weight-bold">Click here</a>
				</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div> -->
<!-- Modal -->

<!--For Sweetalert-->
<script src="src/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="src/css/sweetalert2.min.css">
<link rel="stylesheet" href="src/css/animate.css">
<!--For Sweetalert-->