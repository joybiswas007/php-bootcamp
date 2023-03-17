<?php

class Dollar {
	public $name = "Peter, Griffin";
	function printName() {
		echo $this->showName() . PHP_EOL;
	}

	function showName() {
		return $this->name;
	}
}

$dollar = new Dollar();
$dollar->printName();
