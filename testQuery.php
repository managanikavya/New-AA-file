<?php
	include('HeaderClient.php');
	$projectId = $_REQUEST['queryProjectId'];
?>
<script>
	const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
	const UserID = "<?php echo $_SESSION['User']; ?>";
	const FirstName = "<?php echo $_SESSION['FirstName']; ?>";
	const LastName = "<?php echo $_SESSION['LastName']; ?>";
	const CountryId = "<?php echo $_SESSION['CountryId']; ?>";
	const queryProjectId = <?php echo $projectId ?>;

	$(document).ready(function()
	{
		// alert(queryProjectId);
		var UserID = "<?php echo $_SESSION['UserId']; ?>";
		// $("#ulList").hide();
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
	<div class= "row mt-5 mb-5">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 black-text animated h2Styles" data-wow-delay="0.3s">
				Query the Editor
			</h2>
		</div>
	</div>

	<div class="row">	
		<div class="col-md-5 border-primary mt-3">
			<!-- <h5 class="">Drop your Query here for the Editor</h5> -->
			<textarea id="txtAuthorQuery" rows="15" cols="50" placeholder='Drop your Query here'></textarea>
			<!-- <div class="row"> -->
				<button class="btn btn-primary pl-5 pr-5 block" id="sendquery">Send</button>
			<!-- </div> -->
		</div>
		<div class="col-md-5 offset-md-2">
			<p>Click on the green button to view the answer to your Query</p>
			<div id="query_response">
			</div>
		</div>
	</div>
</div>
<script src="src/js/CustomScripts/chat.js"></script>
<script src="src/Constants/constants.js"></script>


	<!--For Sweetalert-->
		<script src="src/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="src/css/sweetalert2.min.css">
		<link rel="stylesheet" href="src/css/animate.css">
		<!--For Sweetalert-->
		
<?php
	include('footer.php');
?>

<style>
	.block {
  display: block;
  width: 85%;
  border: none;
  /*background-color: #4CAF50;*/
  /*padding: 14px 28px;*/
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
</style>