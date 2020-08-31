<?php
	include('HeaderAdmin.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 black-text animated h2Styles">
				Mails
			</h2>
		</div>
	</div>

	<div class="row mb-5 mt-3">
		<div class="col-sm-10 offset-sm-1" style="height:500px;overflow-y: scroll;">
			<table class="table table-striped table-bordered table-hover table-sm text-center" id="tblMailDetails">
				<thead class="bg-dark text-white">
					<tr>
						<th>Project Id</th>
						<th>To</th>
						<th>Subject</th>
						<th>Time</th>
						<th>Response</th>
					</tr>
				</thead>
				<tbody id="tblBodyMailDetails">
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="src/js/CustomScripts/SentMails.js"></script>
<script src="src/Constants/constants.js"></script>
<script src="src/js/jquery-stickytable.js"></script>
<link rel="stylesheet" type="text/css" href="src/css/jquery-stickytable.css">
<script src="src/Constants/constants.js"></script>
<script>
	$(document).ready(function(){
		$('#tblMailDetails').stickyTable({overflowy: true});
	});
</script>

<?php
include ('footer.php');
?>