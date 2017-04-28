<?php

//include the class
require_once('User.php');

//create new instance of User
$user1 = new User('mbuella','nowyouseeme2');

print_r($user1);

//attempt a login
echo "First attempt...";
if ($user1->validatePassword('nowyouseeme')) {
	$user1->greet();
}

//change the password
echo "Changing password...<br>";
$user1->changePassword('nowyouseeme');

//re-attempt login this time
echo "Second attempt...";
if ($user1->validatePassword('nowyouseeme')) {
	$user1->greet();
}

//display username
echo "Your username is <strong>{$user1->getUsername()}</strong>";




?>