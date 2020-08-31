<?php
	include('HeaderEditor.php');
	$queryProjectId = $_REQUEST['ProjectId'];
?>
<script>
	// $("#btnEditorQuery").addClass("active");
	// $("#btnDashboard").removeClass("active");
	const UserMailClient = "<?php echo $_SESSION['UserId']; ?>";
	const userId = "<?php echo $_SESSION['User']; ?>";
	const ProjectId = "<?php echo $queryProjectId ?>";
</script>
<div class="container-fluid mb-5">
	<div class= "row mt-5">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text " data-wow-delay="0.3s">
				Editor Queries
			</h2>
		</div>
	</div>

	<div class="row border border-primary pt-2 pb-4 mt-5">
		<div class="col-md-3 table-responsive" style="height: 600px; overflow-y: scroll;">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Messages</th>
					</tr>
				</thead>
				<tbody id="tbodyEditorQueries">
					<!-- <tr>
						<td>Hi this is a message</td>
					</tr> -->
				</tbody>
			</table>
		</div>

		<div class="col-md-8 text-center">
			<span id="spnquery"></span><br>
			<span id="spnSentBy"></span><br>
			<span id="spnSentTime"></span><br>
			<span id="spnReply"></span><br>
			<span id="spnreplyTime"></span>
			<br>
			<textarea class="form-control mt-4" rows="10" Placeholder="Select a Red Query to start answering" id="txtReplyQuery"></textarea>
			<button class="btn btn-primary mt-3" style="width:100%" onClick="btnReply()">Submit</button>
		</div>
	</div>
</div>
<script src="src/Constants/constants.js"></script>
<script src="src/js/CustomScripts/EditorQueries.js"></script>
<!--For Sweetalert-->
		<script src="src/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="src/css/sweetalert2.min.css">
		<link rel="stylesheet" href="src/css/animate.css">
<?php
	include('footer.php');
?>