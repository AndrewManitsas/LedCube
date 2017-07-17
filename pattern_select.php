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
	<title></title>

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