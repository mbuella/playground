<?php

//include the class
require_once('User.php');

//create a new instance of user
$user1 = new User('abonifacio','abc123','regular');

//save the user info to database
if($user1->save())
	echo "User has been successfully added to database.";
else
	echo "Something went wrong on the database!";


?>