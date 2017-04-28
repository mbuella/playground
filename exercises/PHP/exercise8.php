<!DOCTYPE html>
<html>
<head>
	<title>PHP Loops: Month Names (Array Version)</title>
</head>
<body>
	<?php 
		$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

		$pt = 0;

		while ($pt < count($months)) {
			echo "$months[$pt]<br>";
			$pt++;
			# code...
		}
	?>
</body>
</html>