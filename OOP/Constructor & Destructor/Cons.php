<?php

class Cons {
	public $name;
	public $class;

	function __construct($name = "", $class = "") {
		$this->name = $name;
		$this->class = $class;
	}

	function printDetails() {
		echo "$this->name studying in $this->class class." . PHP_EOL;
	}
}

$con = new Cons("Peter Griffin", "1st");
$con->printDetails();