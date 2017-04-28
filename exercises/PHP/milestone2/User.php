<?php

class User {	
	//properties
	private $username, $password, $role;

	//methods
	function __construct($username,$password,$role) {
		$this->username = $username;
		$this->password = $password;
		$this->role = $role;
	}

	function save() {
		require('connection.php');
		$sha_p = sha1($this->password);
		$sql = "INSERT INTO users (
					user_name,
					user_pword,
					user_role
				) VALUES (
					'{$this->username}',
					'{$sha_p}',
					'{$this->role}'

				);";

		if(mysqli_query($conn,$sql)) {
			return true;
		}
		return false;
	}
}

?>