<?php
class University {
	protected $name;
	protected $address;

	function __construct($name, $address) {
		$this->name = $name;
		$this->address = $address;
	}

	function getName() : string {
		return $this->name;
	}

	function getAddress() : string {
		return $this->address;
	}

	function universityDetails() {
		echo "University Name: " . $this->getName() . PHP_EOL;
		echo "University Address: " . $this->getAddress() . PHP_EOL;
	}
}

class Student extends University {
	protected $id;
	protected $studentName;
	protected $department;

	function __construct($id, $studentName, $department, University $university) {
		$this->id = $id;
		$this->studentName = $studentName;
		$this->department = $department;

		$this->name = $university->name;
		$this->address = $university->address;
	}

	function getID() : int {
		return $this->id;
	}

	function getStudentName() : string {
		return $this->studentName;
	}

	function getDepartment() : string {
		return $this->department;
	}

	function studentDetails() {
		echo "Student ID: " . $this->getID() . PHP_EOL;
		echo "Student Name: " . $this->getStudentName() . PHP_EOL;
		echo "Department: " . $this->getDepartment() . PHP_EOL;
	}

}

$uni = new University("MIT", "Massachusetts");

$student1 = new Student(101, "Peter Griffin", "Physics", $uni);
$student1->universityDetails();
$student1->studentDetails();
 