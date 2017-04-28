<?php require_once('arrLib.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>More on Associative Arrays</title>
	<style>
		table {
			border: 1px solid;
			border-collapse: collapse;
		}
		td, th {
			border: 1px solid;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>More on Associative Arrays</h1>
	<h2>One Array Only</h2>

	<form method="POST">
		<select name="capitals">
			<?php createOpts($capitals) ?>		
		</select>
		<input type="submit" name="submit1"></input>
	</form>
	<p>
		<?php
			if (isset($_POST['submit1'])) {
				$selCap = $_POST['capitals'];
				echo "The capital of <em>$capitals[$selCap]</em> is <strong>$selCap</strong>.";
			}
		?>
	</p>
	<h2>Any Array Can Be Used</h2>

	<form method="POST">
		<select name="colors">
			<?php createOpts($colors) ?>
		</select>
		<input type="submit" name="submit2"></input>
	</form>

	<p>
		<?php displayResult("submit2","colors") ?>	
	</p>
	<h2>Multidimensional Arrays</h2>
	<table>
		<tr>
			<th>City</th>
			<th>Country</th>
			<th>Continent</th>
		</tr>
		<?php
			foreach ($cities as $city) {
				echo "<tr>";
				foreach ($city as $info) {
					echo "<td>$info</td>";					
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>