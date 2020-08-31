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
		<script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>
		<script src="src/js/CustomScripts/headerScript.js"></script>
		<link rel="stylesheet" href="src/css/bootnavbar.css">
		<link rel="shortcut icon" href="src/Images/logo.png">
	</head>

	<body style="">
		<header>
			<div>
				<nav class=" px-4 navbar navbar-expand-lg mb-4 navbar-fixed">
					<a class="navbar-brand" href="#">
						<img src="src/Images/logo.png" class="NavbarLogo" style="height: 100px;" />
					</a>
					<div class="collapse navbar-collapse offset-md-2 mt-6" id="navbarNavDropdown">
						<!-- <button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8">Home</button> -->
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="LoginAdmin.php">
									<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-6" id="btnDashboard">Dashboard</button><span class="sr-only"></span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="AddAdmin.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnAddAdmin">Add Admin</button>
							</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="AdminSupport.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnSupport">Support</button>
							</a>
							</li>

							<li class="nav-item">
							<a class="nav-link" href="SentMails.php">
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnSentMails">Sent Mails</button>
							</a>
							</li>

							<li class="nav-item">
							<a class="nav-link" href="Logout.php">								
								<button type="button" class="btn px-4 m-1 btn-pill btn-outline-primary ml-8" id="btnLogout">Logout</button>
							</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
