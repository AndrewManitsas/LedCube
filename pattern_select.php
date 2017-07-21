<?php
	$button = $_GET["def_pattern"];
	echo $button;
	$file = fopen("com_files/default_patterns.txt", "w");
	fwrite($file, $button);
	fclose($file);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pattern Select Site</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<meta http-equiv="refresh" content="1; URL='led_cube.html'" />
	</head>
	<body>
		<br>
		<p>
			The site should redirect to home in 1 sec. If not use the link below.
		</p>
		<br>
		<a href="led_cube.html">Back to main control panel.</a>
	</body>
</html>