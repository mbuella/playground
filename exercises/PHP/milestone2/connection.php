<?php
	
#database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'kwntu';

# Connect to database using the credentials
$conn = mysqli_connect($host,$username,$password,$database);

# evaluate connection status
if (!$conn)
	die('Connection failed!<br>' . mysqli_connect_error());

?>