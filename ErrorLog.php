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
					<h3>Report your Problem</h3>
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<div class="form-group">
								<input type="text" id="txtName" name="txtName" class="form-control validation-form" placeholder="Name *" value="" />
							</div>
							<div class="form-group">
								<input type="text" id="txtEmployeeCode" name="txtEmployeeCode" class="form-control validation-form" placeholder="Employee Code *"/>
							</div>
							<div class="form-group">
								<input type="text" id="txtMailIT" name="txtMailIT" class="form-control validation-form" placeholder="Your Email *"/>
							</div>
							
							<div class="form-group">
								<input type="text" id="txtMobileIT" name="txtMobileIT" class="form-control validation-form" placeholder="Mobile *"/>
							</div>
							<div class="form-group">
								<textarea type="text" id="txtProblemDescription" name="txtProblemDescription" class="form-control validation-form" placeholder="Problem Description *"></textarea>
							</div>
							
							<div class="form-group">
								<input type="button" id="btnSubmit" class="btnContactSubmit" value="Report" onclick="SendMail()"/><br>
								<img id="imgHidden" src="https://wpamelia.com/wp-content/uploads/2018/11/ezgif-2-6d0b072c3d3f.gif" style="height:100px;width:300px;display:none;"/>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- <script src="src/js/CustomScripts/SubmitManuscript.js"></script> -->


<style>
.divContainer
{
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
	<!--For Sweetalert-->
		<!-- <script src="src/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="src/css/sweetalert2.min.css">
		<link rel="stylesheet" href="src/css/animate.css"> -->
		<!--For Sweetalert-->

		<script type="text/javascript">
			$("#divDiscountBanner").hide();
		// $(".input").focus(function() 
		// {
		// 	$(this).parent().addClass("focus");
		// })

		function SendMail()
		{
			var flag = true;
			$(".validation-form").each(function(){
				if($(this).val() == "")
				{
					flag = false;
				}
			});
			if(flag == false)
			{
				alert("Please Select all fields");
			}
			else
			{
				$("#imgHidden").show();
				$("#btnSubmit").prop("disabled",true);
				var firstName = "Name="+$("#txtName").val();
				var lastName = "EmployeeCode="+$("#txtEmployeeCode").val();
				var mailId = "Email="+$("#txtMailIT").val();
				var mobile = "Mobile="+$("#txtMobileIT").val();
				var Problem = "ProblemDescription="+$("#txtProblemDescription").val();
				var Solved ="Solved=0";
				data_all = firstName + "&" + lastName +  "&" + mailId +  "&" + mobile + "&" +  Problem+  "&" + Solved;
				$.ajax({
	                type: "POST",
	                url: "http://aaweb.authorassists.com/api/Extra/ItProbelmRecord",
	                dataType: "json",
	                data: data_all,
	                success: function (response) 
	                {
			      		$("#imgHidden").hide();
						$("#btnSubmit").prop("disabled",false);
	                   	alert(response.Message);
	                },
	                error: function (xhr, ajaxOptions, thrownError) {
	                    console.log(thrownError);
	                    $("#imgHidden").hide();
						$("#btnSubmit").prop("disabled",false);
	                }
	            });
			}
		}
	 </script>