<?php
	#Global vars	
		$capitals = [
			'Tokyo' => 'Japan',
			'Mexico City' => 'Mexico',
			'Washington DC' => 'USA',
			'Mumbai' => 'India',
			'Seoul' => 'Korea',
			'Shanghai' => 'China',
			'Lagos' => 'Nigeria',
			'Buenos Aires' => 'Argentina',
			'Cairo' => 'Egypt',
			'London' => 'UK'
		];

		$colors = [
			'red' => 'Red',
			'blue' => 'Blue',
			'orange' => 'Orange',
			'pink' => 'Pink'
		];

		$cities = [
			['Tokyo','Japan','Asia'],
			['Mexico City','Mexico','North America'],
			['Washington DC','USA','North America'],
			['Mumbai','India','Asia'],
			['Seoul','Korea','Asia'],
			['Shanghai','China','Asia'],
			['Lagos','Nigeria','Africa'],
			['Buenos Aires','Argentina','South America'],
			['Cairo','Egypt','Africa'],
			['London','UK','Europe'],
		];

	#Functions
		function createOpts($array) {			
			foreach ($array as $key => $val) {
				echo "<option value='$key'>$val</option>";
			}
		}

		function displayResult($sub,$arrName) {
			if (isset($_POST[$sub])) {
				$selCap = $_POST[$arrName];
				/*echo "The capital of <em>$capitals[$selCap]</em> is <strong>$selCap</strong>.";*/
			}
		}
?>