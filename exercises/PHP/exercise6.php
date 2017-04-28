<!DOCTYPE html>
<html>
<head>
	<title>PHP Conditions and Loops: Month Names</title>
</head>
<body>
	<?php
		$month = 12;
		$count = 1;

		while($count <= 12){
			switch ($count) {
				case 1:
					echo 'Jan';
					break;
				
				case 2:
					echo 'Feb';
					break;
				
				case 3:
					echo 'Mar';
					break;
				
				case 4:
					echo 'Apr';
					break;
				
				case 5:
					echo 'May';
					break;
				
				case 6:
					echo 'Jun';
					break;
				
				case 7:
					echo 'Jul';
					break;
				
				case 8:
					echo 'Aug';
					break;
				
				case 9:
					echo 'Sep';
					break;
				
				case 10:
					echo 'Oct';
					break;
				
				case 11:
					echo 'Nov';
					break;
				
				case 12:
					echo 'Dec';
					break;
				
				default:
					echo 'Invalid month!';
					break;
			}

			$count++;
			echo "<br>";
		}
	?>
</body>
</html>