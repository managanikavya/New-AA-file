<?php
	include('AAHeader.php');
?>	

		<div class="container-fluid mb-5">
			<div class="row mb-3">
				<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
					<h2 class="h3-responsive font-weight-normal text-center text-uppercase black-text animated h2Styles">
						Pricing
					</h2>
				</div>
			</div>

			<div class="background">
				<div class="container">

					<div class="panel pricing-table">
						<div class="pricing-plan">
							<img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img">
							<h2 class="pricing-header">Personal</h2>
							<ul class="pricing-features">
								<li class="pricing-features-item">Custom domains</li>
								<li class="pricing-features-item">Sleeps after 30 mins of inactivity</li>
							</ul>
							<span class="pricing-price">Free</span>
							<a href="#/" class="pricing-button">Sign up</a>
						</div>

						<div class="pricing-plan">
							<img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
							<h2 class="pricing-header">Small team</h2>
							<ul class="pricing-features">
								<li class="pricing-features-item">Never sleeps</li>
								<li class="pricing-features-item">Multiple workers for more powerful apps</li>
							</ul>
							<span class="pricing-price">$150</span>
							<a href="#/" class="pricing-button is-featured">Free trial</a>
						</div>

						<div class="pricing-plan">
							<img src="https://s21.postimg.cc/tpm0cge4n/space-ship.png" alt="" class="pricing-img">
							<h2 class="pricing-header">Enterprise</h2>
							<ul class="pricing-features">
								<li class="pricing-features-item">Dedicated</li>
								<li class="pricing-features-item">Simple horizontal scalability</li>
							</ul>
							<span class="pricing-price">$400</span>
							<a href="#/" class="pricing-button">Free trial</a>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<span class="spnWordCount">
						<b>Word Count</b>
					</span>
					<div class="input-group">
						<div class="input-group-prepend input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-search-plus"></i></span>
						</div>
						<input type="text" class="form-control pl-0 border-left-0" aria-label="text" aria-describedby="basic-addon1" onkeyup="_price()" id="txtWordCount">
					</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<span class="spnTAT">
						<b>Turn Around Time</b>
					</span>
					<div class="input-group">
						<div class="input-group-prepend input-icon-bg-transparent">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
						</div>
						<select class="form-control pl-0 border-left-0" id="ddlTat" onchange="_price()">
							<option value="5 Days" selected>5 Days</option>
							<option value="3 Days">3 Days</option>
							<option value="2 Days">2 Days</option>
						</select>
					</div>
					
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
				<div class="col-sm-3 col-md-3 col-lg-3 colEnquireNow">
					<button class="btn btn-primary" style="padding: 5px 60px 5px; margin-left: 60px;">
						<a href="https://www.authorassists.com/pricing/" style="color:#fff;"> Enquire Now </a> 
					</button>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
			</div>
			<div class="row">
				<div id="section3">
					<h4 class="panel">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"></a>
					</h4>
					<div id="collapse3" aria-expanded="true" class="service_secnd_sectn">
						<div class="row"> -->
							<!-- +Standard Editing -->
							<!-- <div class="col-md-3 offset-md-1">
								<div class="card">
									<div class="about_service_sect31">
										<div class="card-header" style="background-color: #1f73b7;">
											<div class="row">
												<span class="badge" style="background-color: #f80;">25% discount</span>
											</div>
											<div class="row">
												<span class="spnStandard text-center">Standard</span>
											</div>
										</div>
										<div class="about_service_descrptn1">
											<div id="Standard_price_div" style="display:none;">
												<del><h4 align="center">$80</h4></del>
												<h3 align="center">$40</h3>
											</div>

											<div class="card-body">
												<h5 class="card-title">Standard Editing</h5>
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Spelling, Punctuation, Grammar
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i>
														Sentence Structure
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Technical Accuracy
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Logical Flow
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Content Rephrasing
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Journal Formatting
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Re-editing Support
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Word Count Reduction
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Reference Check
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Letter from Editor & Manuscript Feedback Report
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Author Assists Editing Certificate
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Journal Cover Letter
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Response to Reviewer with Revised Manuscript
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>						
							</div> -->
							<!-- -Standard Editing -->

							<!-- +Advanced Editing -->
							<!-- <div class="col-md-3">
								<div class="card">
									<div class="about_service_sect31">
										<div class="card-header" style="background-color: #1f73b7;">
											<div class="row">
												<span class="badge" style="background-color: #f80;">25% discount</span>
											</div>
											<div class="row">
												<span class="spnStandard text-center">Advanced</span>
											</div>
										</div>
										<div class="about_service_descrptn1">
											<div id="advanced_price_div" style="display:none;">
												<del><h4 align="center">$80</h4></del>
												<h3 align="center">$40</h3>
											</div>

											<div class="card-body">
												<h5 class="card-title">Advanced Editing</h5>
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Spelling, Punctuation, Grammar
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i>
														Sentence Structure
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Technical Accuracy
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Logical Flow
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Content Rephrasing
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Journal Formatting
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Re-editing Support
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Word Count Reduction
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Reference Check
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Letter from Editor & Manuscript Feedback Report
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Author Assists Editing Certificate
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Journal Cover Letter
													</li>
													<li class="list-group-item">
														<i class="fa fa-close uncheckColor" aria-hidden="true"></i> 
														Response to Reviewer with Revised Manuscript
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<!-- -Advanced Editing -->

							<!-- +Substantive Editing -->
							<!-- <div class="col-md-3">
								<div class="card">
									<div class="about_service_sect31">
										<div class="card-header" style="background-color: #1f73b7;">
											<div class="row">
												<span class="badge" style="background-color: #f80;">25% discount</span>
											</div>
											<div class="row">
												<span class="spnStandard text-center">Substantive</span>
											</div>
										</div>
										<div class="about_service_descrptn1">
											<div id="substantive_price_div" style="display:none;">
												<del><h4 align="center">$80</h4></del>
												<h3 align="center">$40</h3>
											</div>

											<div class="card-body">
												<h5 class="card-title">Substantive Editing</h5>
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Spelling, Punctuation, Grammar
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i>
														Sentence Structure
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Technical Accuracy
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Logical Flow
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Content Rephrasing
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Journal Formatting
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Re-editing Support
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Word Count Reduction
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Reference Check
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Letter from Editor & Manuscript Feedback Report
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Author Assists Editing Certificate
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Journal Cover Letter
													</li>
													<li class="list-group-item">
														<i class="fa fa-check-square-o checkColor" aria-hidden="true"></i> 
														Response to Reviewer with Revised Manuscript
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<!-- -Substantive Editing -->
						<!-- </div>
					</div> -->
					<!-- <div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4"></div>
						<div class="col-sm-3 col-md-3 col-lg-3 colEnquireNow">
							<button class="btn btn-primary" style="padding: 5px 60px 5px; margin-left: 60px;">
								<a href="https://www.authorassists.com/english-editing-service/" style="color:#fff;">Enquire Now</a>
							</button>
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5"></div>
					</div>
				</div> -->
		
			<!-- +Submit your Manuscript -->
			<div class="row mb-5" style="margin-top: 50px; background-image: url('https://www.authorassists.com/wp-content/themes/AuthorAssists/images/bg_btn.jpg');">
				<div class="col-sm-8 col-md-8 col-lg-8 offset-lg-2">
					<a href="https://accounts.authorassists.com/enquiryshared" >
						<h3 style="margin-top: 30px; color: #fff;" class="text-center pb-5 pt-5">Submit your Manuscript Now!!</h3>
					</a>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
			</div>
			<!-- -Submit your Manuscript -->
		</div>
<?php
	include('footer.php');
?>
		<script src="src/js/scripts.js"></script>
		<script src="src/js/scripts.js"></script>
		<script src="src/Constants/constants.js"></script>
		<script>
			// $("#divDiscountBanner").hide();
			$("#btnPricing").addClass("active");
		</script>


		<style>
			/*html 
			{
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}*/

*, *:before, *:after {
  box-sizing: inherit;
}

.background {
  padding: 0 25px 25px;
  position: relative;
  width: 100%;
}

.background::after {
  content: '';
  background: #0072ff;
  background: -moz-linear-gradient(top, #0072ff 0%, #00c6ff 100%);
  background: -webkit-linear-gradient(top, #0072ff 0%,#00c6ff 100%);
  background: linear-gradient(to bottom, #0072ff 0%,#00c6ff 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0072ff', endColorstr='#00c6ff',GradientType=0 );
  height: 350px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}

@media (min-width: 900px) {
  .background {
    padding: 0 0 25px;
  }
}

.container {
  margin: 0 auto;
  padding: 50px 0 0;
  max-width: 960px;
  width: 100%;
}

.panel {
  background-color: #fff;
  border-radius: 10px;
  padding: 15px 25px;
  position: relative;
  width: 100%;
  z-index: 10;
}

.pricing-table {
  box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
  display: flex;
  flex-direction: column;
}

@media (min-width: 900px) {
  .pricing-table {
    flex-direction: row;
  }
}

.pricing-table * {
  text-align: center;
  text-transform: uppercase;
}

.pricing-plan {
  border-bottom: 1px solid #e1f1ff;
  padding: 25px;
}

.pricing-plan:last-child {
  border-bottom: none;
}

@media (min-width: 900px) {
  .pricing-plan {
    border-bottom: none;
    border-right: 1px solid #e1f1ff;
    flex-basis: 100%;
    padding: 25px 50px;
  }

  .pricing-plan:last-child {
    border-right: none;
  }
}

.pricing-img {
  margin-bottom: 25px;
  max-width: 100%;
}

.pricing-header {
  color: #888;
  font-weight: 600;
  letter-spacing: 1px;
}

.pricing-features {
  color: #016FF9;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 50px 0 25px;
}

.pricing-features-item {
  border-top: 1px solid #e1f1ff;
  font-size: 12px;
  line-height: 1.5;
  padding: 15px 0;
}

.pricing-features-item:last-child {
  border-bottom: 1px solid #e1f1ff;
}

.pricing-price {
  color: #016FF9;
  display: block;
  font-size: 32px;
  font-weight: 700;
}

.pricing-button {
  border: 1px solid #9dd1ff;
  border-radius: 10px;
  color: #348EFE;
  display: inline-block;
  margin: 25px 0;
  padding: 15px 35px;
  text-decoration: none;
  transition: all 150ms ease-in-out;
}

.pricing-button:hover,
.pricing-button:focus {
  background-color: #e1f1ff;
}

.pricing-button.is-featured {
  background-color: #48aaff;
  color: #fff;
}

.pricing-button.is-featured:hover,
.pricing-button.is-featured:active {
  background-color: #269aff;
}


Resources
		</style>