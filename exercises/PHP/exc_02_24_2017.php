<!DOCTYPE html>
<html>
<head>
	<title>Friday Exercises 02/24/2017</title>
	<style>
		table {
			border-collapse: collapse;
			border: 2px solid;
		}
		td {
			padding: 5px;
			text-align: center;
			border: 1px solid;
		}
		tr:first-child {/*
			font-weight: bold;*/
		}
	</style>
</head>
<body>
	<h1>Friday Exercises 02/24/2017</h1>
	
	<h2>Squares of N</h2>
	<?php
		for($x = 1; $x <= 12; $x++) {
			echo "$x squared is: <strong>" . $x * $x . "</strong><br>";
		}
	?>
	<h2>A Simple Math Loop</h2>
	<?php
		for($x = 1; $x <= 50; $x++) {
			switch (true) {
				case $x <= 15:
					echo "<em>$x</em> x 2 = ";
					echo "<strong>" . $x * 2 . "</strong><br>";
					break;

				case $x <= 35:
					echo "(30 - <em>$x</em>) /2 = ";
					echo "<strong>" . (30 - $x) /2 . "</strong><br>";
					break;

				case $x <= 50:
					echo "<em>$x</em> + 6 = ";
					echo "<strong>" . ($x+6) . "</strong><br>";
					break;

				default:
					break;
			}
		}
	?>
	<h2>Multiplication Table</h2>
	<table>
	<?php
		//display the columns
		for ($a=1; $a <= 12 ; $a++) { 
			echo "<tr>";
			for ($b=1; $b <= 12 ; $b++) {
				//    |Diagonal              OR |VERTICAL       OR |HORIZONTAL 
				if( ( $a * $b == pow($a,2) ) || ($a * $b == $a) || ($a * $b == $b) ){
					echo "<td><strong>". ($a * $b) . "</strong></td>";
				}
				else
					echo "<td>". ($a * $b) . "</td>";
			}
			echo "</tr>";
		}
	?>
	</table>
	<h2>Jejemonizer</h2>
	<?php
		$roman =   ['a','b','c','d','e','f',
					'g','h','i','j','k','l',
					'm','n','o','p','q','r',
					's','t','u','v','w','x',
					'y','z'];

		$jeje =    ["4", "b", "c", "D", "3",
					"f", "6", "h", "1", "j",
					"k", "7", "m", "N", "0",
					"p", "Q", "r", "5", "t",
					"u", "V", "w", "x", "Y", "z"];

		$text = "Hello world!";
		//change the sentence to lowercase
		$textLwr = strtolower($text);
		//split the string to get the individual letters
		$textArr = str_split($textLwr);

		//traverse the array of letters from the sentence
		for($a = 0; $a < count($textArr); $a++) {
			//traverse the roman alphabet array
			for ($i=0; $i < count($roman); $i++) {
				//a flag to determine if the letter is found
				//in the roman alphabet
				$isNotFound = TRUE;
				//compare the letter to the current letter
				//in the alphabet. If found get the corres-
				//ponding letter in the jejebeth
				if($roman[$i] == $textArr[$a]) {
					echo $jeje[$i];
					//the letter has been found! time to move
					//on to the next letter in the sentence :)
					$isNotFound = FALSE;
					break;
				}
			}
			//If not found, display the original character
			if($isNotFound)
				echo $textArr[$a];
		}

	?>
	<h2>Factorial of N</h2>
	<table>
	<?php
		$n = 5;
		$x = $n;
		echo "Number entered: <em>$n</em><br>";
		echo "Calculating factorial...<br>";
		for($a = $x; $a > 1; $a--) {
			$x *= $a - 1;
		}
		echo "Factorial of <em>$n</em> is <strong>$x</strong>.<br>";
	?>

	<h2>Ones, Tens and Hundreds</h2>
	<?php
		$num = 123456789;
		echo "Number: <em>$num</em><br>";
		$numStrRev = str_split(
						strrev(
							strval($num)
						), 3)[0];

		$j = intval($numStrRev);
/*
		$hundreds = $j % 10;
		$tens = (($j % 100)-$hundreds)/10;
		$ones = ($j - ($j % 100))/100;
*/
		/*$ones = floor(($num/1)%10);*/ #or floor($num % 10)
		$ones = floor(($num/1)%10); #or floor($num % 10)
		#	  = $num%10
		$tens = floor(($num/10)%10);
		$hundreds = floor(($num/100)%10);

		echo "Hundreds: $hundreds<br>";
		echo "Tens: $tens<br>";
		echo "Ones: $ones<br>";

/*		for ($x=1; $x < 1000000; $x*=10) { 
			echo floor(($num/$x)%10);
		}*/

	?>

	<h2>Armstrong Numbers</h2>
	<?php
		
		for ($num=100; $num < 1000; $num++) { 
			$hundreds = floor( ($num/100) % 10 );
			$hundredsCubed = pow($hundreds,3);

			$tens = floor( ($num/10) % 10);
			$tensCubed = pow($tens,3);

			$ones = floor( ($num/1) % 10);
			$onesCubed = pow($ones,3);

			$sumOfCubed = $onesCubed + $tensCubed + $hundredsCubed;

			if ($sumOfCubed == $num)
				echo "$sumOfCubed<br>";
		}

	?>
	<h2>Years, Weeks, Days</h2>
	<?php
		
		$days = 568;
		echo "Days: <em>$days</em><br>";

		$years = floor($days/365);
		$remDays = $days%365;
		echo "$years years, ";

		$weeks = floor(($days%365)/7);
		$remDays = ($days%365)%7;
		echo "$weeks weeks, ";

		echo "$remDays days";

	?>
	<h2>Underscored Math Operations</h2>
	<?php
		
		$statement = "43_times_300";

		echo "In: <em>\"$statement\"</em><br>";

		$x = substr($statement, 0, stripos($statement, '_'));
		$y = substr($statement, strripos($statement, '_')+1, strlen($statement));


		echo "Out: ";
		switch (true) {
			case strpos($statement,"plus"):
				echo $x + $y . '<br>';
				break;
			
			case strpos($statement,"minus"):
				echo $x - $y . '<br>';
				break;
			
			case strpos($statement,"times"):
				echo $x * $y . '<br>';
				break;
			
			case strpos($statement,"divided_by"):
				echo $x / $y . '<br>';
				break;
			
			default:
				echo 'Syntax error!';
				break;
		}


	?>
	<h2 id="year">Leap Year or Not</h2>
	<form method="POST" action="#year">
		Enter year to leap: 
		<input type="number" name="year">
		<br>
		<input type="submit" name="submit" value="Show me!">
	</form>
	<br>
	<?php

		if (isset($_POST['submit'])) {
			$year = $_POST['year'];
			echo "Year is <em>$year</em><br>It is ";
				#if (year is not divisible by 4)
				if($year % 4)
					#then (it is a common year)
					echo "not a leap year.";
				#else if (year is not divisible by 100)
				elseif($year % 100)
					#then (it is a leap year)
					echo "a leap year.";
				#else if (year is not divisible by 400)
				elseif($year % 400)
					#then (it is a common year)
					echo "not a leap year.";
				#else (it is a leap year)	
				else
					echo "a leap year.";	
			echo "<br>";
		}
	?>

<!-- 	<?php
		$width = 5;
		$height = 5;
		$end = "</div>";
		$tag = "";

		for ($x=1; $x <= 5; $x++) { 
			$start = "<div style='margin: 0 auto; margin-top: 1px; border: 1px solid;width: {$width}px;height: {$height}px'>";
			$tag = $start . $tag;
			$tag .= $end;

			$width += 10;
			$height += 10;
		}

		echo $tag;
	?> -->

	<?php 
		#x[n] = x[n-1] + x[n-2]
		$a = 1;
		$b = 1;
		$n = 0;
		$count = 12;

		echo "$a $b ";

		for ($i=1; $i <= $count; $i++) { 
			$n = $a + $b;
			$a = $b;
			$b = $n;
			echo "$n ";
		}
	?>
</body>
</html>