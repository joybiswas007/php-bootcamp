<?php

class University {
	protected string $name = "";
	protected string $location = "";

	function __construct(string $name, string $location) {
		$this->name = $name;
		$this->location = $location;
	}
		function displayUniversity() {
			echo "University Name: " . $this->name . PHP_EOL;
			echo "University Location: " . $this->location . PHP_EOL;
		}
}

class Student extends University {
	protected int $id;
	protected string $studentName = "";
	protected int $class;

	function __construct(int $id, string $studentName, int $class, University $uni) {
		$this->id = $id;
		$this->studentName = $studentName;
		$this->class = $class;

		$this->name = $uni->name;
		$this->location = $uni->location;
	}

	function printStudentInformation() {
		echo "Student ID: " . $this->id . PHP_EOL;
		echo "Student Name: " . $this->studentName . PHP_EOL;
		echo "Student Class: " . $this->class . PHP_EOL;
	}
}

$uni = new University("MIT", "USA");

$student1 = new Student(101, "June", 12, $uni);
$student1->displayUniversity();
$student1->printStudentInformation();