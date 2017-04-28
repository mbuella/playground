<?php

class User {	
	//properties
	private $username;
	private $password;

	//methods
	function __construct($username,$password) {
		$this->username = $username;
		$this->password = $password;
	}

	function greet() {
		echo "<h4>Welcome, {$this->username}!</h4>";
	}

	function getUsername() {
		return $this->username;
	}

	function validatePassword($password) {
		if ($password ==$this->password) {
			echo "<h4>Successfully logged in! Logging in...</h4>";
			return true;
		}
		echo "<h4>Your password is invalid!</h4>";
		return false;
	}

	function changePassword($new_pw) { //a setter function
		$this->password = $new_pw;
	}
}

?>