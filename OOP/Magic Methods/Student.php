<?php

class Student{
	private $id;

	function __set($name, $value) {
		echo "Set method NOT found" . PHP_EOL;
		echo $name . PHP_EOL;
		echo $value . PHP_EOL;
		if ($name == "id") {
			$this->id = $value;
		}
	}

	function __get($name) {
		echo "Get method is NOT found" . PHP_EOL;
		echo $name . PHP_EOL;
		if ($name == "id") {
			$this->id;
		}
	}
}

$student1 = new Student();
$student1->id = "Test";

echo $student1->id . PHP_EOL;