<!DOCTYPE html>
<html>
<head>
	<title>PHP Strings: Adding Fractions</title>
</head>
<body>
<?php
	$x = "1/5";
	$y = "1/2";

	//numerator of x
	$num_x = substr($x, 0, strpos($x,"/"));
	$den_x = substr($x, strpos($x,"/"))

	//numerator of y
	$num_x = substr($y, 0, strpos($y,"/"));
	$den_x = substr($y, strpos($y,"/"))
?>
</body>
</html>