<?php

class Constructor{
	public $name = "Stewart, Griffin";
	public $class = "12th";

	function __construct() {
		$this->name = "";
		$this->class = "";
		echo "Hello from Constructor Class" . PHP_EOL;
	}

	function printDetails() {
		echo "$this->name studying in class $this->class" . PHP_EOL;
	}
}

$cons = new Constructor();

$cons->printDetails();