<?php
	include('HeaderEditor.php');
?>
<script>
    const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
    const userIdSession = "<?php echo $_SESSION['User']; ?>";
    
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
<div id="loading-bar-spinner" class="spinner">
	<div class="spinner-icon"></div>
</div>
<div class="container-fluid">
	<h4 class="text-center mb-3 mt-2"><u><i>Dashboard</i></u></h4>
	<div class="row mb-5">
		<div style="height:440px;overflow-y:auto;">
			<table class="table table-responsive table-striped table-bordered table-hover table-sm text-center">
				<thead class="bg-dark text-white">
					<tr>
						<th>Project Id</th>
						<th>Client</th>
						<th>Service</th>
						<th>Edit</th>
						<th>Pages</th>
						<th>Comments</th>
						<th>Assigned Time</th>
						<th>Status</th>
						<th>Download</th>
						<th>Action</th>
						<th>Queries</th>
					</tr>
				</thead>
				<tbody id="tblEditorAssigned"></tbody>
			</table>
		</div>
	</div>
</div>
<script src="src/js/CustomScripts/EditorDashboard.js"></script>
<script src="src/Constants/constants.js"></script>
<?php
	include('footer.php');
?>
<style>
	#loading-bar-spinner.spinner
	{
		left: 50%;
		margin-left: -20px;
		top: 50%;
		margin-top: -20px;
		position: absolute;
		z-index: 19 !important;
		animation: loading-bar-spinner 1000ms linear infinite;
	}

	#loading-bar-spinner.spinner .spinner-icon 
	{
		width: 90px;
		height: 90px;
		border:  solid 8px transparent;
		border-top-color:  #172A6A !important;
		border-left-color: #172A6A !important;
		border-radius: 100%;
	}

	@keyframes loading-bar-spinner 
	{
		0%   { transform: rotate(0deg);   transform: rotate(0deg); }
		100% { transform: rotate(360deg); transform: rotate(360deg); }
	}
</style>