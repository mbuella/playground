<!DOCTYPE html>
<html>
<head>
	<title>PHP Arrays: Finding Average Of A Set Of Numbers</title>
</head>
<body>
	<?php
		$grades = [1,2,3,4,5];

		$gradeCount = count($grades);
		$gradeSum = array_sum($grades);
		$gradeAve = $gradeSum / $gradeCount;

		echo "How many grades? <strong>$gradeCount</strong><br>";
		echo "Total of all grades: <strong>$gradeSum</strong><br>";
		echo "Average of all grades: <strong>$gradeAve</strong><br>";
	?>
</body>
</html>