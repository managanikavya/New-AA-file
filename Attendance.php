<!DOCTYPE html> <!-- seo -->
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="description" content="Send us your manuscript for Editing and Publication services"> <!-- seo -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="src/css/aa.css">
		<title>Attendance</title>
		<link rel="shortcut icon" href="src/Images/logo.png">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel="stylesheet" href="src/css/nouislider.min.css">
		<link rel="stylesheet" href="src/css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" href="src/css/style.css">
		<link rel="stylesheet" href="src/css/bootstrap.min.css">
		<link rel="stylesheet" href="src/css/font-awesome">
		<link rel="stylesheet" href="src/fonts/icomoon/style.css">
		<!--bootstrap 4 css-->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
		<!--bootstrap 4 css-->
		<!--For Fa Fa-icon-->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<!--For Fa Fa-icon-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="src/js/scripts.js"></script>
		<script src="src/js/CustomScripts/headerScript.js"></script>
		<script src="src/Constants/constants.js"></script>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<h1>Attendance</h1>
				</div>
				<div class="col-sm-4"></div>				
			</div>

			<div class="row">
				<div class="col-sm-6 offset-ms-1">
					<span>Select an Employee</span><br>
					<select id="Employees">
						
					</select>
				</div>

				<div class="col-sm-6">
					<span>Select a Month</span><br>
					<select id="month">
						<option value = "1">January</option>
						<option value = "2">February</option>
						<option value = "3">March</option>
						<option value = "4">April</option>
						<option value = "5">May</option>
						<option value = "6">June</option>
						<option value = "7">July</option>
						<option value = "8">August</option>
						<option value = "9">September</option>
						<option value = "10">October</option>
						<option value = "11">November</option>
						<option value = "12">December</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<button class="btn btn-primary btn-lg" id="btnSubmit" onclick="btnSubmit()">Submit</button>
				</div>
				<div class="col-sm-4">
					<button class="btn btn-primary btn-lg" id="btnExcelDownload" onclick="exportTableToExcel('tblData')">Export</button>
				</div>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<table class="table table-hover" cellspacing="5">
						<thead>
							<tr>
								<th>UserId</th>
								<th>Username</th>
								<th>Date</th>
								<th>In Time</th>
								<th>Out Time</th>
								<th>Difference Time</th>
							</tr>
						</thead>
						<tbody id="tblAttendance"></tbody>
					</table>
				</div>
				<div class="col-sm-2"></div>				
			</div>
		</div>
	</body>
	<script>
		$( document ).ready(function()
		{
			$.ajax(
			{
				url:"http://aaweb.authorassists.com/api/Extra/FetchAllEmployees",
				type: "Post",
				data:
				{

				},
				success:function(data)
				{					
					var employeeListLength = data.length;
					var employeeList = "";
					//console.log(data[0]);

					for(var employeeCount = 0; employeeCount < employeeListLength; employeeCount ++)
					{
						employeeList += "<option value =" + data[employeeCount].UserId + ">"+ data[employeeCount].Username + "</option>";
					}
					$("#Employees").html(employeeList);
				}
			});
		});

		function btnSubmit()
		{	
			var tblEmployeeAttendance = "";	
			var dayCount = 0;	
			var Employees = "UserId="+ $("#Employees").val(); 
			var month = "MonthId="+ $("#month").val();
			var year = "Year=2020";
			data_all =  Employees + "&" + month + "&" + year;

			$.ajax(
			{
				url: "http://aaweb.authorassists.com/api/Extra/FetchEmployeeAttendance",
				type: "POST",
				data: data_all,
				success:function(data)
				{
					//console.log(data[0].AttendanceDate.split("T")[0]);

					for(dayCount = 0; dayCount < data.length; dayCount++)
					{
						tblEmployeeAttendance += "<tr>";
						tblEmployeeAttendance += "<td>" + data[dayCount].UserId + "</td>";
						tblEmployeeAttendance += "<td>" + data[dayCount].UserName + "</td>";
						tblEmployeeAttendance += "<td>" + data[dayCount].AttendanceDate.split("T")[0] + "</td>";
						tblEmployeeAttendance += "<td>" + data[dayCount].InTime + "</td>";
						tblEmployeeAttendance += "<td>" + data[dayCount].OutTime + "</td>";
						tblEmployeeAttendance += "<td>" + data[dayCount].DifferenceTime + "</td>";
						tblEmployeeAttendance += "</tr>";
					}
					$("#tblAttendance").html(tblEmployeeAttendance);
				}
			});
		}


		function exportTableToExcel(tblAttendance, filename = 'Attendance')
		{
			var downloadLink;
			var dataType = 'application/vnd.ms-excel';
			var tableSelect = document.getElementById(tblAttendance);
			var tableHTML = '';//tableSelect.outerHTML.replace(/ /g, '%20');

			// Specify file name
			filename = filename?filename+'.xls':'excel_data.xls';

			// Create download link element
			downloadLink = document.createElement("a");

			document.body.appendChild(downloadLink);

			if(navigator.msSaveOrOpenBlob)
			{
				var blob = new Blob(['\ufeff', tableHTML], 
				{
					type: dataType
				});
				navigator.msSaveOrOpenBlob( blob, filename);
			}
			else
			{
				// Create a link to the file
				downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

				// Setting the file name
				downloadLink.download = filename;

				//triggering the function
				downloadLink.click();
			}
		}
	</script>
</html>