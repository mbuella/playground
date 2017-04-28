<!DOCTYPE html>
<html>
<head>
	<title>PHP: Exercise 1</title>
	<style>
		table.team {
			border: 1px solid;
			border-collapse: collapse;
		}
		table.team th,
		table.team td {
			border: 1px solid;		
			padding: 3px;	
		}
	</style>
</head>
<body>

	<?php 
		$name = "Marlon";
		echo 'Hello ' . $name . '!';
		echo "<br>";
		echo "Hello $name!";
		echo "<br>";
		echo "Simple Math: 1 + 1 = " . (1 + 1);

		echo "<h1>Playing with variables</h1>";
		$aString = "Yay! I'm a string!";
		$anotherString = "I'm a string too!";
		echo $aString;
		echo "<br>";
		echo "$anotherString";

		$anInteger = 1385493756;
		echo "<br>";
		echo $anInteger;
		$aFloat = 1.45678;
		echo "<br>";
		echo $aFloat;
		echo "<br>";

		echo "<h1>Playing with arrays</h1>";
		$anArray = array(
						'one',
						2,
						"Tri",
						4.00
					);
		echo $anArray[0];
		echo "<br>";
		echo $anArray[1];
		echo "<br>";
		echo $anArray[2];
		echo "<br>";
		echo $anArray[3];
		echo "<br>";

		echo "<h1>Playing with Constants</h1>";
		define("MY_WARNING","Do not mess me!") ;
		echo "<br>";
		echo MY_WARNING;


		echo "<h1>Playing with Magic Constants</h1>";

		echo __LINE__;
		echo "<br>";
		echo __DIR__;
		echo "<br>";
		echo __FILE__;
		echo "<br>";
		echo __FUNCTION__;
		echo "<br>";
		echo __CLASS__;
		echo "<br>";
		echo __METHOD__;
		echo "<br>";
		echo __NAMESPACE__;
		echo "<br>";


		$colors = ['red','green','blue'];
		$fruits = ['apple','mango','berry'];
		$team_members = array("Vince","Jonathan","Regine","Cielo","Geodel","Billy");

		echo "<table class='team'>
				<tr>
					<th>Team Name</th>
					<th>Members</th>
				</tr>";

		for($x = 0; $x < count($colors); $x++){
			echo "<tr>";
			echo "<td>".$colors[rand(0,2)]." ".$fruits[rand(0,2)]."</td>";
			echo "<td>" . $team_members[$x * 2] . ", " . $team_members[($x * 2)+1] . "</td>";
			echo "</tr>";
		};

		echo "</table>";
 	?>	

</body>
</html>