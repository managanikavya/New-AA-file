<?php
	include('AAHeader.php');
?>

<div class="container register mb-5">
	<div class="row">
					<div class="col-md-3 register-left">
						<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
						<h3>Welcome</h3>
						<p>You are 30 seconds away from enjoying our services!</p>
						<!-- <input type="submit" name="" value="Login"/><br/> -->
					</div>
					<div class="col-md-9 register-right">
						<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Author</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Editor</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<h3 class="register-heading">Apply as an Author</h3>
								<div class="row register-form">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="txtFirstName" id="txtFirstName" class="form-control validation-form" placeholder="First Name *" value="" />
										</div>
										<div class="form-group">
											<input type="text" name="txtLastName" id="txtLastName" class="form-control validation-form" placeholder="Last Name *" value="" />
										</div>
										<div class="form-group">
											<input type="hidden" name="txtPasswordA" id="txtPasswordA" class="form-control validation-form" placeholder="Password *" value="author_assists_589" />
										</div>
										<div class="form-group">
											<select name="ddlCountry" id="ddlCountry" class="form-control" placeholder="Country *" value=""></select>
										</div>
										
										<!-- <div class="form-group">
											<div class="maxl">
												<label class="radio inline"> 
													<input type="radio" name="gender" value="male" checked>
													<span> Male </span> 
												</label>
												<label class="radio inline"> 
													<input type="radio" name="gender" value="female">
													<span>Female </span> 
												</label>
											</div>
										</div> -->
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="txtMail" id="txtMail" class="form-control validation-form" placeholder="Your Email *" value="" />
										</div>
										<div class="form-group">
											<input type="text" id="txtMobile" name="txtMobile" class="form-control validation-form" placeholder="Your Phone *" value="" />
										</div>
										<div class="form-group">
											<input type="hidden" id="txtConfirmPaswword" name="txtConfirmPaswword" class="form-control validation-form"  placeholder="Confirm Password *" value="author_assists_589" />
										</div>
										<div class="form-group">
											<select id="selMembership" name="selMembership" class="form-control">
												<option value = "Select Membership *">Select Membership *</option>
												<option value = "Basic">Basic Membership ($0)</option>
												<option value = "Silver">Silver Membership ($10)</option>
												<option value = "Gold">Gold Membership ($18)</option>
												<option value = "Platinum">Platinum Membership ($25)</option>
											</select>
										</div>
									   <!--  <div class="form-group">
											<select class="form-control">
												<option class="hidden"  selected disabled>Please select your Sequrity Question</option>
												<option>What is your Birthdate?</option>
												<option>What is Your old Phone Number</option>
												<option>What is your Pet Name?</option>
											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
										</div> -->
										<input type="submit" class="btnRegister" id="btnRegister" value="Register" onclick="AuthorRegistration()" />
									</div>
								</div>
							</div>
							<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<h3  class="register-heading">Apply as an Editor</h3>
								<div class="row register-form">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="txtFirstNameE" id="txtFirstNameE" class="form-control validation-form" placeholder="First Name *" value="" />
										</div>
										<div class="form-group">
											<input type="text" name="txtLastNameE" id="txtLastNameE" class="form-control validation-form" placeholder="Last Name *" value="" />
										</div>
										<div class="form-group">
											<input type="email" name="txtMailE" id="txtMailE" class="form-control validation-form" placeholder="Email *" value="" />
										</div>
										<div class="form-group">
											<select type="text" name="ddlCountryE" id="ddlCountryE" class="form-control"></select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" name="txtPasswordE" id="txtPasswordE" class="form-control validation-form" placeholder="Password *" value="" />
										</div>
										<div class="form-group">
											<input type="password" id="txtConfirmPaswwordE" name="txtConfirmPaswwordE" class="form-control validation-form" placeholder="Confirm Password *" value="" />
										</div>
										<div class="form-group">
											<input type="text" maxlength="10" minlength="10" id="txtMobileE" name="txtMobileE" class="form-control validation-form" placeholder="Phone *" value="" />
										</div>
										<!-- <div class="form-group">
											<select class="form-control">
												<option class="hidden"  selected disabled>Please select your Sequrity Question</option>
												<option>What is your Birthdate?</option>
												<option>What is Your old Phone Number</option>
												<option>What is your Pet Name?</option>
											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="`Answer *" value="" />
										</div> -->
										<input type="submit" class="btnRegister"  value="Register" onclick="EditorRegistration()" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>

<style>
	.register{
	background: -webkit-linear-gradient(left, #3931af, #00c6ff);
	margin-top: 3%;
	padding: 3%;
}
.register-left{
	text-align: center;
	color: #fff;
	margin-top: 4%;
}
.register-left input{
	border: none;
	border-radius: 1.5rem;
	padding: 2%;
	width: 60%;
	background: #f8f9fa;
	font-weight: bold;
	color: #383d41;
	margin-top: 30%;
	margin-bottom: 3%;
	cursor: pointer;
}
.register-right{
	background: #f8f9fa;
	border-top-left-radius: 10% 50%;
	border-bottom-left-radius: 10% 50%;
}
.register-left img{
	margin-top: 15%;
	margin-bottom: 5%;
	width: 25%;
	-webkit-animation: mover 2s infinite  alternate;
	animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
	0% { transform: translateY(0); }
	100% { transform: translateY(-20px); }
}
@keyframes mover {
	0% { transform: translateY(0); }
	100% { transform: translateY(-20px); }
}
.register-left p{
	font-weight: lighter;
	padding: 12%;
	margin-top: -9%;
}
.register .register-form{
	padding: 10%;
	margin-top: 10%;
}
.btnRegister{
	float: right;
	margin-top: 10%;
	border: none;
	border-radius: 1.5rem;
	padding: 2%;
	background: #0062cc;
	color: #fff;
	font-weight: 600;
	width: 50%;
	cursor: pointer;
}
.register .nav-tabs{
	margin-top: 3%;
	border: none;
	background: #0062cc;
	border-radius: 1.5rem;
	width: 28%;
	float: right;
}
.register .nav-tabs .nav-link{
	padding: 2%;
	height: 34px;
	font-weight: 600;
	color: #fff;
	border-top-right-radius: 1.5rem;
	border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
	border: none;
}
.register .nav-tabs .nav-link.active{
	width: 100px;
	color: #0062cc;
	border: 2px solid #0062cc;
	border-top-left-radius: 1.5rem;
	border-bottom-left-radius: 1.5rem;
}
.register-heading{
	text-align: center;
	margin-top: 8%;
	margin-bottom: -15%;
	color: #495057;
}
</style>

<script src="src/js/CustomScripts/SignUp.js"></script>
<!-- <script src="src/js/scripts.js"></script> -->
<script src="src/Constants/constants.js"></script>


<!--For Sweetalert-->
<script src="src/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="src/css/sweetalert2.min.css">
<link rel="stylesheet" href="src/css/animate.css">
<!--For Sweetalert-->

<?php
	include('footer.php');
?>