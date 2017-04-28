<?php

class Swordsman extends Infantry {
	private $sword;

	function __construct($name,$sword) {
		$this->name = $name;
		$this->sword = $sword;
	}

	function setSword($sword) {
		$this->sword = $sword;
	}

	function getSword() {
		return $this->sword;
	}
}

?>