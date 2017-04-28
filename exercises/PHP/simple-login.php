<!DOCTYPE html>
<html>
<head>
	<title>A Simple Login Page</title>
</head>
<body>
	<h3>Login</h3>
	<form method="POST">
		Username: <input type="text" name="uname"></input>
		<br>
		<br>
		Password: <input type="password" name="pass"></input>
		<br>
		<br>
		<input type="submit" name="login" value="Login"></input>
	</form>

	<p>
		<?php
			#get contents of the JSON users file
			$string = file_get_contents("users.json");
			#convert $string to assoc array
			$users = json_decode($string, true);


			if (isset($_POST['login'])) {
				$uname = $_POST['uname'];
				$pass = $_POST['pass'];
				$found = 0;

				foreach ($users as $user) {
					if ($uname == $user['username']) {
						$found = 1;
						if ($pass == $user['password']) {
							echo "You are logged in as <strong>{$user['username']}</strong>.";
						}
						else{
							echo "<span style='color: red'>Your password is incorrect!</span>";
							break;
						}
					}
				}

				if (!$found) {
					echo "<span style='color: red'>Username not found!</span>";
				}

			}
		?>
	</p>

	<h3>Register</h3>
	<form method="POST">
		Username: <input type="text" name="reg_uname"></input>
		<br>
		<br>
		Password: <input type="password" name="reg_pass"></input>
		<br>
		<br>
		Confirm Password: <input type="password" name="reg_pass2"></input>
		<br>
		<br>
		<input type="submit" name="register" value="Register"></input>
	</form>

	<p>
		<?php
			if (isset($_POST['register'])) {

				#fetch user info from the form
				$uname = $_POST['reg_uname'];
				$pass = $_POST['reg_pass'];
				$pass2 = $_POST['reg_pass2'];
				
				#check passwords match
				if ($pass == $pass2) {
					#get contents of the JSON users file
					$string = file_get_contents("users.json");
					#convert json to assoc array
					$users = json_decode($string, true);

					#open file for writing
					$u_json = fopen("users.json", "w");

					$new_user = ["username" => $uname, "password" => $pass];

					#add the new user info to the array
					array_push($users, $new_user);

					#convert assoc array to json
					$string = json_encode($users, JSON_PRETTY_PRINT);

					#write the new formated string to the file
					fwrite($u_json, $string);

					#close the file
					fclose($u_json);

					#inform user that registration is successful
							echo "Your registration was successful!";

				}
				else
					echo "<span style='color: red'>Your passwords do not match!</span>";
			}

		?>
	</p>
</body>
</html>