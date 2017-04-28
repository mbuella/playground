<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms: BMI Calculator</title>
</head>
<body>
	<form method="post">
		Weight in kg: 
			<input type="number" name="weight">

			<select onchange="setHyt()" name="unitWeight" id="weight">
				<option>kg</option>
				<option>pounds</option>
			</select>
			<br><br>
		Height in cm:
			<input type="number" name="height">

			<select name="unitHeight" readonly id="height">
				<option>meters</option>
				<option>inches</option>
			</select>

			<br><br>		
		<input type="submit" name="submit"></input>
	</form>

	<?php
		//check if the form has been submitted
		if(isset($_POST['submit'])) { 
			$weight = $_POST['weight'];
			$height = $_POST['height'];
			$unitWeight = $_POST['unitWeight'];
			$unitHeight = $_POST['unitHeight'];

			echo "<p>You weigh <strong>{$weight}{$unitWeight}</strong> and are <strong>{$height}{$unitHeight}</strong> tall.<br>";

			//1. If kg, meters
			if($_POST['weight'] == 'kg' && $_POST['height'] == 'meters'){
				# get weight
				$weight = $_POST['weight'];
				# square height
				$height = pow($_POST['height'],2);
			//2. If kg, inches
			} else if ($_POST['weight'] == 'kg' && $_POST['height'] == 'inches') {
				# get weight
				$weight = $_POST['weight'];
				# convert height to meters
				# square height
				$height = pow($_POST['height']*0.0254,2);
			//3. If pounds, inches
			} else if ($_POST['weight'] == 'pounds' && $_POST['height'] == 'inches') {
				# multiply weight by 703
				$weight = $_POST['weight']*703;
				# square height
				$height = pow($_POST['height'],2);	
			//4. If pounds, meters
			} else if ($_POST['weight'] == 'pounds' && $_POST['height'] == 'meters') {
				# multiply weight by 703
				$weight = $_POST['weight']*703;
				# convert height to inches
				# square height
				$height = pow($_POST['height']*39.3701,2);					
			}

			$bmi = round($weight/$height,2);

			echo "The person's BMI is <strong>$bmi</strong></p>";
		}
	?>

	<script>
		function setHyt(){
			document.getElementById('height').selectedIndex = document.getElementById('weight').selectedIndex;
		}
	</script>
</body>
</html>