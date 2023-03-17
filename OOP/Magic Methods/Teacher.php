<?php
class Teacher{
	public $name = "This is a test";

	function __toString() : string {
		echo "Name: " . $this->name . PHP_EOL;
		return "To String Method" . PHP_EOL;
	}
}

$teacher1 = new Teacher();
echo $teacher1;