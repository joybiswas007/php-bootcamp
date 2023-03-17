<?php

abstract class University{
	private $universityName;
	private $universityLocation;

	function getUniversityName() : string {
		return $this->universityName;
	}

	function setUniversityName($universityName) {
		$this->universityName = $universityName;
	}

	function getUniversityLocation() : string {
		return $this->universityLocation;
	}

	function setUniversityLocation($universityLocation) {
		$this->universityLocation = $universityLocation;
	}

	abstract function printStudentDetails();
}

class Student extends University{
	private $studentID;
	private $studentName;
	private $studentAge;

	function __construct($studentID, $studentName, $studentAge) {
		$this->studentID = $studentID;
		$this->studentName = $studentName;
		$this->studentAge = $studentAge;
	}

	function printStudentDetails() {
		echo "Student ID: " . $this->studentID . PHP_EOL;
		echo "Student Name: " . $this->studentID . PHP_EOL;
		echo "Student Age: " . $this->studentAge . PHP_EOL;
		echo "University Name: " . $this->getUniversityName() . PHP_EOL;
		echo "University Location: " . $this->getUniversityLocation() . PHP_EOL;
	}
}


$student1 = new Student(101, "Peter", 21);
$student1->setUniversityName("MIT");
$student1->setUniversityLocation("USA");
$student1->printStudentDetails();