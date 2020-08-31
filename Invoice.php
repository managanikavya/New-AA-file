<?php
	$ProjectID= $_REQUEST[ProjectID];
	echo $ProjectID;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CS^3</title>
		<link rel="shortcut icon" href="../src/img/CS_Logo.jpg" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="../src/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="../src/js/jquery.min.js"></script>
		<link rel="stylesheet" href="../src/css/jquery-ui.css">
		<script src="../src/js/jquery-ui.min.js"></script>
		<!-- Popper JS -->
		<script src="../src/js/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="../src/js/bootstrap.min.js"></script>
		<script>
			var projectCode = "<?php echo $ProjectID; ?>";
			//alert(projectCode);
			$(document).ready(function()
			{
				$.ajax(
				{
					type: "POST",
					url: "http://aaweb.authorassists.com/api/Admin/FetchInvoiceDetails",
					data:
					{
						ProjectCode:projectCode
					},
					success: function(data)
					{
						console.log(data.ResponseObject);
						var response = data.ResponseObject;
						$("#tdBillTo").html(response.ClientName);
						$("#tdInvoicenumber").html(response.ProjectCode);
						$("#tdDueDate").html(response.DueDate);
						$("#tdCurrentBalance").html("0.00 USD");
						$("#pDescription").html(response.LevelOfEdit + " on " + response.FileName);
						$("#tdItem").html("1");
						$("#tdItemName").html(response.LevelOfEdit);
						$("#tdQuantity").html(response.WordCount);
						$("#tdPrice").html();
						$("#tdAmount").html(response.TotalAmount);
						$("#tdDiscountLabel").html("<b>Discount("+ response.DiscountPercent + "):</b>");
						$("#tdDiscount").html();
					}
				});
			});
		</script>
	</head>
	<body>
		<h6 align="center"><i>Generate Invoice ☞ </i><a href="#" id="aGenerateInvoice">Click Here</a></h6>
		<div class="container border" id="InvoiceHTML">
			<div style="width:100%;padding-right:5px;padding-left:5px;margin-right:auto;margin-left:auto;"><br/>
				<div style="background-image: url('Author_Assists_logo.png');opacity:0.1;position: absolute;top:20%;left:30%;width: 50%;height: 50%;background-repeat:no-repeat;overflow: hidden;"></div>
				<table style="width:80%;margin-bottom:1rem;">
					<tr>
						<td><b>Bill To:</b></td>
						<td style="padding:.20rem;vertical-align:top;" id="tdBillTo"></td>
					</tr>
					<tr>
						<td><b>Invoice #:</b></td>
						<td style="padding:.20rem;vertical-align:top;" id="tdInvoicenumber"></td>
					</tr>
					<tr>
						<td><b>Due Date:</b></td>
						<td style="padding:.20rem;vertical-align:top;" id="tdDueDate"></td>
					</tr>
					<tr>
						<td><b>Status:</b></td>
						<td style="padding:.20rem;vertical-align:top;" id="tdStatus"></td>
					</tr>
					<tr>
						<td><b>Current Balance:</b></td>
						<td style="padding:.20rem;vertical-align:top;" id="tdCurrentBalance"></td>
					</tr>
				</table>
				<br/>
				<p style="margin: 0;padding: 0;"><b>Description:</b></p>
				<p id="pDescription"></p>
				<table style="width:100%;margin-bottom:1rem;">
					<thead>
						<tr>
							<th style="padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;text-align:center!important;"><b>Item Id:</b></th>
							<th style="padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;text-align:center!important;"><b>Item Name:</b></th>
							<th style="padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;text-align:center!important;"><b>Quantity:</b></th>
							<th style="padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;text-align:center!important;"><b>Price(USD):</b></th>
							<th style="padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;text-align:center!important;"><b>Amount(USD):</b></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="padding:.75rem;vertical-align:top;text-align:center!important;border-bottom:1px solid #dee2e6;" id="tdItem">1</td>
							<td style="padding:.75rem;vertical-align:top;text-align:center!important;border-bottom:1px solid #dee2e6;" id="tdItemName"></td>
							<td style="padding:.75rem;vertical-align:top;text-align:center!important;border-bottom:1px solid #dee2e6;" id="tdQuantity"></td>
							<td style="padding:.75rem;vertical-align:top;text-align:center!important;border-bottom:1px solid #dee2e6;" id="tdPrice"></td>
							<td style="padding:.75rem;vertical-align:top;text-align:center!important;border-bottom:1px solid #dee2e6;" id="tdAmount"></td>
						</tr>
						<tr>
							<td colspan="3"></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;" id="tdDiscountLabel"><b></b></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;" id="tdDiscount"></td>
						</tr>
						<tr>
							<td colspan="3"></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;"><b>Subtotal:</b></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;" id="tdSubtotal">147.57</td>
						</tr>
						<tr>
							<td colspan="3"></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;"><b>Shipping:</b></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;" id="tdShippingCharges">0.00</td>
						</tr>
						<tr>
							<td colspan="3"></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;"><b>Tax:</b></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;" id="tdTax">0.00</td>
						</tr>
						<tr>
							<td colspan="3"></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;"><b>Total</b></td>
							<td style="padding:.25rem;vertical-align:top;text-align:center!important;" id="tdTotalAmount">147.57</td>
						</tr>
					</tbody>
				</table>
				<p style="height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef;"></p>
				<table style="width:100%;text-align:center!important;">
					<tr>
						<td style="font-size:11px;">
							<p align="center" style="margin: 1;padding: 1;"><b><i>USA</i></b></p>
							<p>913 N Market Street, <br/>Suite 200 Wilmington, Delaware 19801, USA</p>
							<p>+1 (302) 660 3268</p>
						</td>
						<td style="font-size:11px;">
							<p align="center" style="margin: 1;padding: 1;"><b><i>Hong Kong</i></b></p>
							<p>Floor 20, Central Tower, <br/>28 Queen's Road Central, Hong Kong</p>
							<p>projects@authorassists.com</p>
						</td>
						<td style="font-size:11px;">
							<p align="center" style="margin: 1;padding: 1;"><b><i>South Korea</i></b></p>
							<p>9401ho, 262 Joongangro, <br/>Yangchongu, Seoul, South Korea</p>
							<p>+82 (2) 2088 5338</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<script>
			$(document).ready(function()
			{
				$("#aGenerateInvoice").click(function()
				{
					var InvoiceHTML = "InvoiceHTML="+encodeURIComponent($("#InvoiceHTML").html());
					$.ajax({
						type: "POST",
						url: "generateInvoice.php",
						dataType: "html",
						data: InvoiceHTML,
						success: function (response){
							alert(response);
							console.log(response);
							// if(response == "Success")
							// {
							//     swal("Mail Sent Successfully", {
							//         icon: "success",
							//     });
							// }
							// else
							// {
							//     swal("Oppss..","Error...Mail Not Sent","error");
							// }
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(thrownError);
						}
					});
				});                
			});
		</script>
	</body>
</html>