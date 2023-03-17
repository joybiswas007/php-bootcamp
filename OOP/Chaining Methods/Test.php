<?php

class Test {
	public $id;
	public $name;

	function __construct($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}

	function getID() {
		echo "ID: $this->id" . PHP_EOL;
		return $this;
	}

	function getName() {
		echo "Name: $this->name" . PHP_EOL;
		return $this;
	}
}

$test = new Test(101, "Peter Griffin");
$test->getID()->getName()->content;