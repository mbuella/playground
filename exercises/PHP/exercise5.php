<!DOCTYPE html>
<html>
<head>
	<title>PHP Conditions: Multiples of Three</title>
</head>
<body>
	<?php
		$num = 8;

		if($num % 3 == 0)
			echo "<strong>$num</strong> is a multiple of three.";
		else
			echo "<strong>$num</strong> is not a multiple of three";

	?>
</body>
</html>