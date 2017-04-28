<?php
	
#database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'musicstore';

# Connect to database using the credentials
$conn = mysqli_connect($host,$username,$password,$database);

# evaluate connection status
if (!$conn)
	die('Connection failed!<br>' . mysqli_connect_error());
else {
	echo 'Connected to database successfully!';
	echo "<hr>";

	# display all rows inside table songs
	$sql = "SELECT * FROM songs;";
	# $result will be an object!
	$result = mysqli_query($conn,$sql);
	# So we need to convert it
	# to an associative array. 
	# Fetching each row...
	while ($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
		echo "Title: {$row['title']}<br>";
		echo "Length: {$row['length']}<br>";
		echo "Genre: {$row['genre']}<br>";
		echo "<br>";
	}

	# close the database connection
	$conn_close = mysqli_close($conn);

	if (!$conn_close)
		die('Closing connection failed!<br>');
	else
		echo "<hr>Connection closed successfully!";
}

?>