<!doctype html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="src/css/aa.css">
	<link rel="stylesheet" href="src/css/header.css">
	<title>Author Assists</title>
	<link rel="shortcut icon" href="src/Images/logo.png">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="src/css/nouislider.min.css">
	<link rel="stylesheet" href="src/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="src/css/style.css">
	<link rel="stylesheet" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" href="src/fonts/icomoon/style.css">
	<!--bootstrap 4 css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--bootstrap 4 css-->
	<!--For Fa Fa-icon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--For Fa Fa-icon-->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script> <!-- font-awesome-5 -->
	<script src="src/js/scripts.js"></script>
	<script src="src/js/CustomScripts/ProjectDetails.js"></script>

	<!-- include jQuery library -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

	<!-- include FilePond library -->
	<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
	<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

	<!-- include FilePond plugins -->
	<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

	<!-- include FilePond jQuery adapter -->
	<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
	<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
	</head>

	<body>
		<style>
			.filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	border-radius: 2em;
	background-color: #edf0f4;
	height: 1em;
}

.filepond--item-panel {
	background-color: #595e68;
}

.filepond--drip-blob {
	background-color: #7f8a9a;
}


/**
 * Page Styles
 */
html {
	padding:30vh 0 0;
}

body {
	max-width: 20em;
	margin: 0 auto;
}
		</style>
		<!-- <input type="file" id="fileUpload" /> -->
		<!-- <input type="file" 
			class="filepond"
			name="filepond" 
			multiple 
			data-allow-reorder="true"
			data-max-file-size="3MB"
			data-max-files="3"> -->

			<input type="file">

			<script>
			const inputElement = document.querySelector('input[type="file"]');
			const pond = FilePond.create( inputElement );

			FilePond.setOptions({
			    server: 'http://192.168.0.245'
			});
			</script>

			<script>
				FilePond.registerPlugin(
	
					// encodes the file as base64 data
				  FilePondPluginFileEncode,
					
					// validates the size of the file
					FilePondPluginFileValidateSize,
					
					// corrects mobile image orientation
					FilePondPluginImageExifOrientation,
					
					// previews dropped images
				  FilePondPluginImagePreview
				);

				// Select the file input and use create() to turn it into a pond
				FilePond.create(
					document.querySelector('input')
				);
			</script>
	</body>
	</html>