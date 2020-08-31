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
	<title>Webshop Check</title>
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
	<script>
		function webshopUrlCheck()
		{
			var parameter = "result=ok&documentURL=test&customerWordCountCategory=10&calculatedWordCount=10&Areaofstudy=test&TurnaroundTime=20&englishStyle=test&specInstructions=no&authKey=0&partnerKey=23466654";

			$.ajax(
			{
				url: "http://api.webshop.cosmicstrands.com/api/webshop/CreateSubmission",
				type: "Post",
				data: parameter,
				success: function(data)
				{
					if(data.result == "ERROR")
					{
						$("#divResultPrint").html("Working fine");
					}
					else
					{
						$("#divResultPrint").html("Not Working fine");
					}
				}
			});
		}
	</script>
	  <button class="btn btn-lg btn-primary" id="btnWebshop" onclick="webshopUrlCheck()">Check</button>
	  <div id="divResultPrint"></div>
  </body>
  </html>