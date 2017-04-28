<?php

class Archer extends Infantry {
	private $bow;

	function __construct($name,$bow) {
		$this->name = $name;
		$this->bow = $bow;
	}

	function setBow($bow) {
		$this->bow = $bow;
	}

	function getBow() {
		return $this->bow;
	}
}

?>