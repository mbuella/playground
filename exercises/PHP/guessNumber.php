<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>Guess The Number!</title>
</head>
<body>
	<?php
			if (isset($_POST['restart'])) {
				$_SESSION["randomNum"] = rand(1,100);
			}
			$randomNum = $_SESSION["randomNum"];
			#$randomNum = 63;
			$num = 1;

			if(isset($_POST['submit']))
				$num = $_POST['num'];

	?>

	<h1>Guess The Number!</h1>
	<h3>Select a number from 1 to 100.</h3>

	<form method="POST">
		<input type="number" name="num" value=<?php echo $num ?>></input>
		<br>
		<input type="submit" name="submit" value="Guess the number!"></input>
		<input type="submit" name="restart" value="Restart Game!"></input>
		<input type="hidden" name="randomNum"></input>
	</form>

	<p>
		<?php

			if(isset($_POST['submit'])) {
				if ($num > $randomNum)
					echo "Please try a lower number.";

				else if ($num < $randomNum)
					echo "Please try a higher number.";

				else
					echo "You've got the correct number!";
			}

		?>
	</p>

</body>
</html>