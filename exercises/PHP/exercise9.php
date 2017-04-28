<head>
	<title>Afternoon Exercises [02/23/2017]</title>
</head>
<body>
	<h1>Afternoon Exercises</h1>
	<h3>Even number Test</h3>
	<?php
		$num = 3;
		echo "The number to test is: <i>$num</i>.<br>";

		if($num % 2 == 0){
			echo "The number is <strong>even</strong>.<br>";		
		}
		else {
			echo "The number is <strong>odd</strong>.";	

		}

	?>
	<h3>BMI Calculator</h3>
	<?php
		$height = 1.70;
		$weight = 64;

		echo "The person weighs <strong>{$weight}kg</strong> and is <strong>{$height}m</strong> tall.<br>";

		$bmi = round($weight/(pow($height,2)),2);

		echo "The person's BMI is <strong>$bmi</strong>";
	?>
	<h3>Sum of odd and sum of even numbers from 1 to 100</h3>
	<?php
		$min = 1;
		$max = 100;

		$sumEven = 0;
		$sumOdd = 0;

		echo "We have numbers from <strong>$min</strong> to <strong>$max</strong><br>";	

		while ($min <= $max) {
			# code...
			if($min % 2 == 0)
				$sumEven += $min;
			else
				$sumOdd += $min;
			$min++;
		}

		echo "Sum of even numbers: <strong>$sumEven</strong><br>";
		echo "Sum of odd numbers: <strong>$sumOdd</strong><br>";

	?>
	<h3>5x5 Square</h3>
	<?php
		$sym = '*';
		$row = 0;
		$col = 0;
		$length = 5;

		while ($row < $length) {
			while ($col < $length) {
				echo "$sym ";
				$col++;
			}
			echo "<br>";
			$col = 0;
			$row++;
		}

	?>
	<h3>5x5 Square (For-loop version)</h3>
	<?php
		$sym = '*';
		$length = 5;

		$rowCount = 100;
		$colCount = 100;

		for ($row = 0; $row < $rowCount; $row++) {
			for ($col = 0; $col < $colCount; $col++) {
				echo "$sym ";
			}
			echo "<br>";
		}

	?>
</body>
</html>