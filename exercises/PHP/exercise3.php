<!DOCTYPE html>
<html>
<head>
	<title>PHP Math: Phytagorean Theorem</title>
</head>
<body>
	<?php
		$a = 3;
		$b = 4;
		//initialize to 0
		$c = 0;

		//add the squares of a and b
		$addSq = pow($a, 2) + pow($b, 2);
		echo "Sum of a2 and b2 = $addSq<br>";

		//find the square root of addSq
		$phy = sqrt($addSq);

		echo "Value of c = $phy";
	?>
</body>
</html>