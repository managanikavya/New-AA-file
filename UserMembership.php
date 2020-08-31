<?php
	include('HeaderClient.php');
?>
<script>
	$("#btnMembership").addClass("active");
</script>

<div class="container mb-5">
	<div class= "row mt-5 mb-3">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text " data-wow-delay="0.3s">
				Membership
			</h2>
		</div>
	</div>
	<p class="text-center">Membership helps authors get access to a wide variety of journals and books available with us, in addition to the free discounts</p>

	<!-- <table class="table table-stripped table-bordered table-responsive">
		<thead class="bg-primary text-white">
			<tr>
				<th>Membership</th>
				<th>Amount Paid</th>
				<th>Valid For</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Renewal Date</th>
				<th>Add-ons</th>
				<th>Certificates</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Basic Membership</td>
				<td>$0</td>
				<td>3 months</td>
				<td>01-08-2020</td>
				<td>01-08-2021</td>
				<td>02-08-2021</td>
				<td>
					1.	5 Q/A for Editors<br>
					2. 10 Q/A from Executive
				</td>
				<td>
					1.	Download E-Certificates<br>
					2.	Download Letter of Editor<br>
					3.	Download Edited files
				</td>
			</tr>
		</tbody>
	</table> -->

	<!-- <div class= "row mt-5 mb-3">
		<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
			<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text " data-wow-delay="0.3s">
				Membership Details
			</h2>
		</div>
	</div> -->

	<div class="row mt-4">
		<div class="pricing card-deck flex-column flex-md-row mb-3">
		<div class="card card-pricing popular_basic shadow text-center px-3 mb-4 offer offer-radius offer-primary">
			<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm" style="background-color: #00BFFF;">Basic</span>
			<div class="bg-transparent card-header pt-4 border-0">
				<h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">0</span><span class="h6 text-muted ml-2"></span></h1>
			</div>
			<div class="card-body pt-0">
				<ul class="list-unstyled mb-4">
					<li>1 re-edit of the article</li>
					<li>No changes in the manuscript</li>
					<li>No additional discounts</li>
					<li>After-sales support as per queue</li>
				</ul>
				<!-- <a href="SubmitManuscript.php" target="_blank" class="btn btn-primary mb-3">Pay</a> -->
			</div>
		</div>

		<div class="card card-pricing popular_silver shadow text-center px-3 mb-4 offer offer-radius offer-primary">
			<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm" style="background-color: #c4aead;">Silver</span>
			<div class="bg-transparent card-header pt-4 border-0">
				<h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">10</span><span class="h6 text-muted ml-2">for 3 months</span></h1>
			</div>
			<div class="card-body pt-0">
				<ul class="list-unstyled mb-4">
					<li>Basic +</li>
					<li>5% changes in the manuscript</li>
					<li>Additional discount of $0.001/word</li>
					<li>After-sales support</li>
				</ul>
				<a href="ProjectPayment.php?Amount=10" target="_blank" class="btn btn-primary mb-3">Pay Now</a>
			</div>
		</div>

		<div class="card card-pricing popular_gold shadow text-center px-3 mb-4  offer offer-radius offer-primary">
				
			<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm" style="background-color: #FFD700">Gold</span>
			<div class="shape" style="position: absolute;top: 0;right: 0;">
					<div class="shape-text">
						Offer
					</div>
				</div>
			<div class="bg-transparent card-header pt-4 border-0">
				<h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">$<span class="price">18</span><span class="h6 text-muted ml-2">for 6 months</span></h1>
			</div>
			<div class="card-body pt-0">
				<ul class="list-unstyled mb-4">
					<li>Silver +</li>
					<li>10% changes in the manuscript</li>
					<li>Additional discount of $0.002/word</li>
					<!-- <li>After-sales support</li> -->
					<li></li>
					<li></li>
				</ul>
				<a href="ProjectPayment.php?Amount=18" target="_blank" class="btn btn-primary mb-3">Pay Now</a>
			</div>
		</div>
		<div class="card card-pricing popular_platinum shadow text-center px-3 mb-4 offer offer-radius offer-primary">
			<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm" style="background-color: #b76e79">Platinum</span>
			<div class="bg-transparent card-header pt-4 border-0">
				<h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span class="price">25</span><span class="h6 text-muted ml-2">for 1 year</span></h1>
			</div>
			<div class="card-body pt-0">
				<ul class="list-unstyled mb-4">
					<li>Gold +</li>
					<li>15% changes in the manuscript</li>
					<li>Additional discount of $0.004/word</li>
					<!-- <li>After-sales support</li> -->
					<li></li>
					<li></li>
				</ul>
				<a href="ProjectPayment.php?Amount=25" target="_blank" class="btn btn-primary mb-3">Paid</a>
			</div>
		</div>
	</div>
</div>
	</div>
	</div>
</div>


<?php
	include('footer.php');
?>

<style>
	.card-pricing.popular {
	z-index: 1;
	border: 3px solid #007bff;
}
.card-pricing.popular_basic {
	z-index: 1;
	border: 3px solid #00BFFF;
}
.card-pricing.popular_silver {
	z-index: 1;
	border: 3px solid #c4aead;
}
.card-pricing.popular_gold {
	z-index: 1;
	border: 3px solid #FFD700;
}
.card-pricing.popular_platinum {
	z-index: 1;
	border: 3px solid #b76e79;
}
.card-pricing .list-unstyled li {
	padding: .5rem 0;
	color: #6c757d;
}

.shape{    
	border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer:hover {
    -webkit-transform: scale(1.1); 
    -moz-transform: scale(1.1); 
    -ms-transform: scale(1.1); 
    -o-transform: scale(1.1); 
    transform:rotate scale(1.1); 
    -webkit-transition: all 0.4s ease-in-out; 
-moz-transition: all 0.4s ease-in-out; 
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
    }
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
	border-radius:7px;
}

.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
}
.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}	
.offer-content{
	padding:0 20px 10px;
}
@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
}
@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }
}
</style>