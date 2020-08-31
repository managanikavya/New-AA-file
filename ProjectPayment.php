<?php
include('HeaderClient.php');
?>
<script>
    const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
</script>

<div class="container mb-5">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="card ">
                <div class="card-header">
                	<h3 class="text-center">Payment Details</h3>
                    <div class="row">                        
                        <img class="img-fluid cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="card-block">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label class="ml-2">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control ml-2" id="txtCardNumber" placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="ml-2"><span class="hidden-xs">EXPIRY DATE</span></label>
                                    <input type="tel" class="form-control ml-2" id="txtExpiryDate" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 float-xs-right">
                                <div class="form-group">
                                    <label>CVV</label>
                                    <input type="tel" class="form-control" id="txtCvv" placeholder="CVV" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label class="ml-2">CARD OWNER</label>
                                    <input type="text" class="form-control ml-2" id="txtCardOwnerName" placeholder="Card Owner Name" />
                                    <!-- <span id="spnAmount"></span> -->
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-11 text-center">
                        	<span id="spnAmount"></span>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" onclick="btnPaymentPayNow()">Process payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 offset-md-2 table-responsive">
            <table class="table table-bordered table-sm text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Card Number</th>
                        <th>Card Expiry</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbodyCardDetails">
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                </tbody>
            </table>

            <button class="btn btn-primary" id="btnCardSubmit" onClick="btnsubmitCard()">Submit</button>
        </div>
    </div>
</div>

<!-- <script>
    const params = new URLSearchParams(window.location.search)
    var amt = params.get('Amount');
    console.log(amt);
</script> -->

<script src="src/js/scripts.js"></script>
	<script src="src/js/CustomScripts/ProjectPayment.js"></script>
	<script src="src/Constants/constants.js"></script>

	<!--For Sweetalert-->
		<script src="src/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="src/css/sweetalert2.min.css">
		<link rel="stylesheet" href="src/css/animate.css">
		<!--For Sweetalert-->
	


		<?php
		include('footer.php');
		?>