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

<div class="container mb-5">
	<div class= "row mt-5">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text " data-wow-delay="0.3s">
				Support
			</h2>
		</div>
	</div>

	<div class="row mt-5">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title text-center">
					<img src="src/Images/Q&A.svg" style="height:70px;">
				</h5>
				<h5 class="card-text text-center">
					Chats
				</h5>
				<p class="card-text text-center">
					<a href="https://cutt.ly/AuthorAssistsChat" target="_blank">Please click on here to start chatting</a>
				</p>
			</div>
		</div>

		<div class="card offset-md-1" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title text-center">
					<img src="src/Images/email.svg" style="height:70px;">
				</h5>
				<h5 class="card-text text-center">
					Email
				</h5>
				<p class="card-text text-center">
					<a href="mailto:projects@authorassists.com">Click here to mail us directly</a>
				</p>
			</div>
		</div>

		<div class="card offset-md-1" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title text-center">
					<img src="src/Images/phone-call.svg" style="height:70px;">
				</h5>
				<h5 class="card-text text-center">
					Phone
				</h5>
				<p class="card-text text-center">
					<a href="tel:+1 302 6603268">+1 302 6603268</a>
				</p>
			</div>
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>