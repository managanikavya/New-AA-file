<?php
	include('AAHeader.php');
?>
		

		<div class="container-fluid mb-5">
			<div class="row">
				<div class="col-sm-12 col-ms-12 col-12 col-lg-12">
					<h2 class="h3-responsive font-weight-normal text-center text-uppercase mb-0 px-3 wow fadeInDown black-text animated h2Styles" data-wow-delay="0.3s">
						Business and Economics REsearch Paper
					</h2>
				</div>
			</div>

			<div class="row" style="margin-top: 30px;">
				<div class="col-sm-10 col-md-10 col-lg-10 offset-md-1 text-justify">
					<p>
						We have supported thousands of authors by working on 10,000+ books during our journey. Research papers written on Business Economics deals with Business ventures, Insurance, Econometrics, and so on. The subject-matter experts maintain the quality of the content by polishing and refining the management and strategic concepts. Feel free to inquire with our team in case you do not find the desired subject area.
					</p>
					<p style="color: blue; font-weight: 700;">
						Click on any of the below topics to see the sub-topics we cover
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3 offset-md-1">
					<ul class="list-group">
						<li class="list-group-item" onclick="businessManagementShow()" style="cursor: pointer;">Business Management</li>
						<li class="list-group-item" onclick="economicsShow()" style="cursor: pointer;">Economics</li>
					</ul>
				</div>

				<div class="col-sm-8 col-md-8 col-lg-8">
					<div id="divBusiness">
						<table class="table table-striped">
							<thead class="text-center">
								<tr>
									<th colspan="2">Topics for Business Management</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Business Administration</td>
									<td>Business Management (Others)</td>
								</tr>
								<tr>
									<td>Corporate Social Responsibility</td>
									<td>Entrepreneurship</td>
								</tr>
								<tr>
									<td>Hotel Administration</td>
									<td>Human Resources</td>
								</tr>
								<tr>
									<td>International Business</td>
									<td>Management Education</td>
								</tr>
								<tr>
									<td>Operations Management</td>
									<td>Project Management</td>
								</tr>
								<tr>
									<td>Risk Management</td>
									<td>Servicing</td>
								</tr>
								<tr>
									<td>Strategy</td>
									<td>Supply Chain Management</td>
								</tr>
								<tr>
									<td>Technology Management</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div id="divEconomics">
						<table class="table table-striped">
							<thead class="text-center">
								<tr>
									<th colspan="3">Topics for Economics</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Accounting</td>
									<td>Agricultural Economics</td>
									<td>Banking</td>
								</tr>
								<tr>
									<td>Behavioral Economics</td>
									<td>Computational Economics</td>
									<td>Consumer Economics</td>
								</tr>
								<tr>
									<td>Corporate Finance</td>
									<td>Development Economics</td>
									<td>Ecological Economics</td>
								</tr>
								<tr>
									<td>E-Commerce</td>
									<td>Econometrics</td>
									<td>Energy Economics</td>
								</tr>
								<tr>
									<td>Entrepreneurial Economics</td>
									<td>Environmental Economics</td>
									<td>Evolutionary Economics</td>
								</tr>
								<tr>
									<td>Experimental Economics</td>
									<td>Feminist Economics</td>
									<td>Finance</td>
								</tr>
								<tr>
									<td>Game Theory</td>
									<td>Human Development Theory</td>
									<td>Industrial Organization</td>
								</tr>
								<tr>
									<td>Information Economics</td>
									<td>Institutional economics</td>
									<td>Insurance</td>
								</tr>
								<tr>
									<td>International Economics</td>
									<td>International Trade</td>
									<td>Islamic Economics</td>
								</tr>
								<tr>
									<td>Labor Economics</td>
									<td>Law and Economics</td>
									<td>Macroeconomics</td>
								</tr>
								<tr>
									<td>Managerial Economics</td>
									<td>Mathematical Economics</td>
									<td>Microeconomics</td>
								</tr>
								<tr>
									<td>Monetary Economics</td>
									<td>Neuroeconomics</td>
									<td>Pharmacoeconomics</td>
								</tr>
								<tr>
									<td>Socialist Economics</td>
									<td>Socioeconomics</td>
									<td>Tax</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12" style="background: #1e639b;padding: 0 15%; margin-top: 30px;">
				<p style="color: yellow; padding-top: 3%; font-size: 25px;">
					Author Assists’ Assurance	
				</p>
				<p style="color: white; padding-top: 1%; font-size: 20px;">					
					Our company has collaborated with thousands of scholars, researchers, organizations, and libraries to transform the research publishing industry.
				</p>
				<p style="color: white; padding-bottom: 3%; padding-top: 1%; font-size: 20px;">					
					We believe in the power of content and deliver high-end editing service to clients.  We promise 100% quality, on-time delivery, and error-free manuscripts.	
				</p>
			</div>

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

		<script src="src/js/scripts.js"></script>
		<script src="src/js/CustomScripts/businessEconomics.js"></script>
		<script src="src/Constants/constants.js"></script>
		<script>
			// $("#divDiscountBanner").hide();
			$("#dropdownMenuButton").addClass("active");
		</script>
<?php
	include('footer.php');
?>