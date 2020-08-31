<?php
	include ('AAHeader.php');
?>
<div class="container divContainer mb-5">
	<div class="row">
		<div class="col-md-12 offset-md-2">
			<div class="contact-form">
				<div class="contact-image">
					<img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
				</div>
				<form method="post" id="formManuscript">
					<h3>Submit your Manuscript</h3>
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<div class="form-group">
								<input type="text" id="txtFirstName" name="txtFirstName" class="form-control validation-form" placeholder="First Name *" value="" />
							</div>
							<div class="form-group">
								<input type="text" id="txtLastName" name="txtLastName" class="form-control validation-form" placeholder="Last Name *"/>
							</div>
							<div class="form-group">
								<input type="text" id="txtEmail" name="txtEmail" class="form-control validation-form" placeholder="Your Email *"/>
							</div>
							<div class="form-group">
								<!-- <input type="text" id="txtServices" name="txtServices" class="form-control validation-form" placeholder="Services *"/> -->
								<select id="txtServices" name="txtServices" class="form-control validation-form">
									<option value="English Editing">Select a Service</option>
									<option value="English Editing">English Editing</option>
									<option value="Translation">Translation</option>
									<option value="Book Editing">Book Editing</option>
								</select>
								<span style="color: grey;">Please select the required service *</span>
							</div>
							<div class="form-group">
								<input type="text" id="txtCountry" name="txtCountry" class="form-control validation-form" placeholder="Country *"/>
							</div>
							<div class="form-group">
								<input type="file" id="fileMain" name="fileMain" class="form-control validation-form" placeholder="Upload your File *"/>
								<span style="color: grey;">Please upload your manuscript here*</span>
							</div>
							<div class="form-group">
								<input type="file" id="fileReference" name="fileReference" class="form-control" placeholder="Upload your Reference File *" value="" />
								<span style="color: grey;">Please upload your reference file here</span>
							</div>
							<div class="form-group">
								<input type="submit" id="btnSubmit" class="btnContactSubmit" value="Get A Quote" />
							</div>
						</div>
						<!-- <div class="col-md-6">
							<div class="form-group">
								<textarea name="txtMessage" id="txtMessage" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
							</div>
						</div> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="src/js/CustomScripts/SubmitManuscript.js"></script>
<?php
	include('footer.php');
?>

<style>
	.divContainer{
	background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
	background: #fff;
	margin-top: 10%;
	margin-bottom: 5%;
	width: 70%;
}
.contact-form .form-control{
	border-radius:1rem;
}
.contact-image{
	text-align: center;
}
.contact-image img{
	border-radius: 6rem;
	width: 11%;
	margin-top: -3%;
	transform: rotate(29deg);
}
.contact-form form{
	padding: 14%;
}
.contact-form form .row{
	margin-bottom: -7%;
}
.contact-form h3{
	margin-bottom: 8%;
	margin-top: -10%;
	text-align: center;
	color: #0062cc;
}
.contact-form .btnContact {
	width: 50%;
	border: none;
	border-radius: 1rem;
	padding: 1.5%;
	background: #dc3545;
	font-weight: 600;
	color: #fff;
	cursor: pointer;
}
.btnContactSubmit
{
	width: 50%;
	border-radius: 1rem;
	padding: 1.5%;
	color: #fff;
	background-color: #0062cc;
	border: none;
	cursor: pointer;
}
</style>