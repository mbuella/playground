<?php
	function getTitle() {
		return '12 Days of Christmas';
	}

	function getLyrics() {
		$gifts = [
			"first" => "a Partridge in a Pear Tree",
			"second" => "Two Turtle Doves",
			"third" => "Three French Hens",
			"fourth" => "Four Calling Birds",
			"fifth" => "Five Golden Rings",
			"sixth" => "Six Geese a Laying",
			"seventh" => "Seven Swans a Swimming",
			"eighth" => "Eight Maids a Milking",
			"ninth" => "Nine Ladies Dancing",
			"tenth" => "Ten Lords a Leaping",
			"eleventh" => "Eleven Pipers Piping",
			"twelfth" => "Twelve Drummers Drumming"/**/
		];

		$line = "";

		foreach ($gifts as $day => $gift) {

			echo "On the $day day of Christmas my true love sent to me:<br>";

			if ($day == 'first')				
				$line = " $gift" . $line;

			else if ($day == 'second')
				$line = " $gift,<br>and " . $line;

			else
				$line = " $gift,<br>" . $line;

			$line = ucfirst(strtolower($line));
			echo "$line.<br><br>";
		}
	}
?>