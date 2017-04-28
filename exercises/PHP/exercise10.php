<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>
	<form method="post">
		Columns: <input type="number" name="columns"></input><br><br>
		Rows: <input type="number" name="rows"></input><br><br>
		<input type="submit" name="submit"></input>
	</form>

	<?php
		//check if the form has been submitted
		if(isset($_POST['submit'])) { 
			$colCount = $_POST['columns'];
			$rowCount = $_POST['rows'];
			$sym = '*';
	
			for ($row = 0; $row < $rowCount; $row++) {
				for ($col = 0; $col < $colCount; $col++) {
					echo "$sym ";
				}
				echo "<br>";
			}
		}
	?>
</body>
</html>