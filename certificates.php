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
		$("#ulList").hide();
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
				Finished Project
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" style="height:500px;overflow-y: scroll;">
			<table class="table table-responsive table-striped table-bordered table-hover table-sm text-center">
				<thead>
					
				</thead>
			</table>
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>