<?php
session_start();
    if(!isset($_SESSION["UserId"]))
    {
        header("location:AA.php");
    }
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
		<header>
			<div>
			<!-- <div class="bg-image" style="background-image: url('src/Images/HeaderPic1.png')"> -->
				<nav class=" px-4 navbar navbar-expand-lg mb-4 navbar-fixed" id="main_navbar">
					<a class="navbar-brand" href="ClientDashboard.php">
						<img src="src/Images/logo.png" class="NavbarLogo" style="height: 100px;" />
					</a>
					
					<div class="collapse navbar-collapse offset-md-2 mt-6" id="navbarNavDropdown">
						<ul class="navbar-nav" id="ulList">
							<li class="nav-item active">
								<a class="nav-link" href="Dashboard.php">
									<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-6" id="btnDashboard">Dashboard</button><span class="sr-only"></span>
								</a>
							</li>

							
							 <li class="nav-item">
								<a class="nav-link" href="Payments.php">
									<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnPayments">Payments</button>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="userSupport.php">
									<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnQuery">Support</button>
								</a>
							</li>

							<li class="nav-item">
							<a class="nav-link" href="UserMembership.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnMembership">Membership</button>
							</a>
							</li>

							<!-- <li class="nav-item">
							<a class="nav-link" href="Profile.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnAccounts">Accounts</button>
							</a>
							</li>  -->

							<li class="nav-item dropdown">
								<div class="nav-link">
									<a class="btn px-4 m-1 btn-pill btn-outline-primary ml-8 nav-link dropdown-toggle" href="Profile.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnAccounts">
										Accounts
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li>
											<a class="dropdown-item" href="Profile.php">
												<i class="fa fa-list" aria-hidden="true"></i> Profile
											</a>
											
										</li>
										<li class="nav-item dropdown">
											<a class="dropdown-item" href="ChangePassword.php">
												<i class="fa fa-exchange" aria-hidden="true"></i> Change Password
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="Logout.php">
												<i class="fa fa-book" aria-hidden="true"></i> Logout
											</a>
										</li>
									</ul>
								</div>
							</li>

							<!-- <li class="nav-item">
							<a class="nav-link" href="AA.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnLogout">Logout</button>
							</a>
							</li> -->
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

<!--For Sweetalert-->
<script src="src/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="src/css/sweetalert2.min.css">
<link rel="stylesheet" href="src/css/animate.css">
<!--For Sweetalert-->