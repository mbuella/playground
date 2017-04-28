<!DOCTYPE html>
<html>
<head>
	<title>PHP Loops: Multiples of Three</title>
</head>
<body>
	<?php
		$num = 0;
		$multiplier = 11;

		while($num <= 100) {
			if($num % $multiplier == 0){
				echo "$num<br>";		
			}
			$num++;	
		}

	?>
</body>
</html>