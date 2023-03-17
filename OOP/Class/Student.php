<?php
class Student {
	public $name;
	public $class;

	function getName() : int {
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

	function printDetails() {
		echo "$this->name study in class $this->class." . PHP_EOL;
	}
}

$student1 = new Student();
$student1->setName("Quagmire, Glenn");
$student1->setClass("12th");
$student1->printDetails();

$student2 = new Student();
$student2->setName("Griffin, Stewart");
$student2->setClass("10th");
$student2->printDetails();