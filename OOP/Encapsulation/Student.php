<?php

class Student{
	private $id;
	private $name;
	private $class;

	function getID() : int {
		return $this->id;
	}

	function setID($id) {
		$this->id = $id;
	}

	function getName() : string {
		return $this->name;
	}

	function setName($name) {
		$this->name = $name;
	}

	function getClass() : int {
		return $this->class;
	}

	function setClass($class) {
		$this->class = $class;
	}
}

$student1 = new Student();
$student1->setID(101);
$student1->setName("John Smith");
$student1->setClass(12);

echo "Student ID: " . $student1->getID() . PHP_EOL;
echo "Student Name: " . $student1->getName() . PHP_EOL;
echo "Student Class: " . $student1->getClass() . PHP_EOL;