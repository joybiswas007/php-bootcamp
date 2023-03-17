<?php
class Student{
	public $name;
	public $class;

	function getName() : string {
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}

	function getClass() : string {
		return $this->class;
	}

	function setClass($class){
		$this->class = $class;
	}

	function printDetails() {
		echo "$this->name is studying in $this->class class." . PHP_EOL;
	}
}

$student1 = new Student();
$student1->setName("Griffin, Chris");
$student1->setClass("10th");
$student1->printDetails();


$student2 = new Student();
$student2->setName("Smith, John");
$student2->setClass("12th");
$student2->printDetails();