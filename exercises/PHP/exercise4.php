<!DOCTYPE html>
<html>
<head>
	<title>PHP Variables: Swapping values</title>
</head>
<body>
	<?php
		$x = 1;
		$y = 2;
		//we'll use a temporary storage for swapping
		$temp = 0;

		echo "<strong>Before swap:</strong><br>";
		echo 'Value of $x: ' . "<strong>$x</strong><br>";
		echo 'Value of $y: ' . "<strong>$y</strong><br>";

		//put x to temp
		$temp = $x; //$temp is now 1

		//put y to x
		$x = $y; //$x is now 2

		//put temp to y
		$y = $temp; //$y is now 1

		echo "<br>";
		echo "<strong>After swap:</strong><br>";
		echo 'Value of $x: ' . "<strong>$x</strong><br>";
		echo 'Value of $y: ' . "<strong>$y</strong><br>";
	?>
</body>
</html>