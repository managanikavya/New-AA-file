<?php
	include('HeaderAdmin.php');
	$ProjectCode = $_REQUEST['ProjectCode'];
?>
<script>
	const ProjectCode = "<?php echo $ProjectCode; ?>";
</script>
<div class="container">
	<div class="col-md-6 login-form-2 offset-md-3 mt-5 mb-5">
		<h3>Assign Editors</h3>
		<form id="frmAssignEditors">
			<div class="form-group">
				<label data-error="wrong" data-success="right" for="ddlEditors" class="text-light" placeholder="Editors">Select Editors</label>
				<select id="ddlEditors" name="ddlEditors" class="form-control validate white-text">
					
				</select>
			</div>

			<div class="form-group">
				<label data-error="wrong" data-success="right" for="txtPageCount" placeholder="Page Count" class="text-light">Page Count</label>
				<input type="number" id="txtPageCount" name="txtPageCount" class="form-control validate white-text" autocomplete="off">
			</div>

			<div class="form-group">
				<label data-error="wrong" data-success="right" for="txtComment" placeholder="Comment" class="text-light">Comment</label>
				<!-- <input type="text" id="txtPageCount" name="txtPassword" class="form-control validate white-text"> -->
				<textarea id="txtComment" name="txtComment" class="form-control validate white-text" rows="4" style="resize:none;"></textarea>
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-light btn-block btn-rounded z-depth-1" Value="Assign">
			</div>
		</form>
	</div>
</div>
<!-- <script src="src/js/CustomScripts/headerScript.js"></script> -->
<script src="src/Constants/constants.js"></script>
<script src="src/js/CustomScripts/AssignEditors.js"></script>
<link rel="stylesheet"href="src/css/AssignEditors.css">

<?php
	include ('footer.php');
?>
 
 <!--For Sweetalert-->
<script src="src/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="src/css/sweetalert2.min.css">
<link rel="stylesheet" href="src/css/animate.css">
<!--For Sweetalert-->
