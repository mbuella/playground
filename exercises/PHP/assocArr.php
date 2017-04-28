<?php
	$jejebeth = [
		'a' => '4',
		'b' => 'b',
		'c' => 'c',
		'd' => 'D',
		'e' => '3',
		'f' => 'f',
		'g' => '6',
		'h' => 'h',
		'i' => '1',
		'j' => 'j',
		'k' => 'k',
		'l' => '7',
		'm' => 'm',
		'n' => 'N',
		'o' => '0',
		'p' => 'p',
		'q' => 'Q',
		'r' => 'r',
		's' => '5',
		't' => 't',
		'u' => 'u',
		'v' => 'V',
		'w' => 'w',
		'x' => 'x',
		'y' => 'Y',
		'z' => 'z',
	];

	$word = "MarlonBuella";

	for ($i=0; $i < strlen($word); $i++) { 
		foreach ($jejebeth as $a => $j) {
			if($a == strtolower($word[$i])){
				echo $j;
				break;
			}
		}
	}

?>