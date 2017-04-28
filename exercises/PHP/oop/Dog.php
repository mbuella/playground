<?php

class Dog {
	//properties (characteristics) of dog
	//public means they are accessible within
	//and outside the class.
	public $name, $breed, $color;

	//constructor
	//initialize the class public variables
	function __construct($name,$breed,$color) {
		//set 'name' of this class
		//to the value of $name
		$this->name = $name;
		$this->breed = $breed;
		$this->color = $color;
	}

	//methods (behavior) of dog
	function sayHello() {
		echo "Hello";
	}
}

?>