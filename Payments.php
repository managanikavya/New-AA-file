<?php
	include('HeaderClient.php');
?>
<script>
	const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
</script>

<div class="container">
	<h1 class="text-center">Payment Details</h1>
	<div class="row mt-5 mb-5" style="height:500px;overflow-y: scroll;">
		<table class="table table-sm table-bordered table-striped" id="tblPayment">
			<thead class="bg-dark text-white">
				<tr>
					<th>Project Code</th>
					<th>Amount Paid</th>
					<th>Status</th>
					<th>Message</th>
					<th>Reference Id</th>
					<th>Transaction Id</th>
					<th>Payment Date</th>
					<!-- <th>Action</th> -->
				</tr>
			</thead>
			<tbody id="tblPaymentDetails"></tbody>
		</table>
	</div>
</div>

<?php
include('footer.php');
?>
<script src="src/Constants/constants.js"></script>
<script src="src/js/CustomScripts/Payments.js"></script>