<?php
class University {
	protected $univesityName;
	protected $univesityAddress;

	function __construct($univesityName, $univesityAddress) {

		$this->univesityName = $univesityName;
		$this->univesityAddress = $univesityAddress;
	}

	function getUniversityDetails() {
		echo "University Name: " . $this->univesityName . PHP_EOL;
		echo "University Address: " . $this->univesityAddress . PHP_EOL;
	}

}

class Teacher extends University {
	protected $teacherName;
	protected $teacherAge;
	protected $subject;

	function __construct($teacherAge, $teacherName, $subject, University $university) {
		$this->teacherName = $teacherName;
		$this->teacherAge = $teacherAge;
		$this->subject = $subject;

		$this->univesityName = $university->univesityName;
		$this->univesityAddress = $university->univesityAddress;
	}

	function getTeacherDetails() {
		echo "Teacher Name: " . $this->teacherName . PHP_EOL;
		echo "Teacher Age: " . $this->teacherAge . PHP_EOL;
		echo "Subject: " . $this->subject . PHP_EOL;
	}

}

$uni1 = new University("MIT", "USA");
$teacher1 = new Teacher("June", 40, "Physics", $uni1);

$teacher1->getUniversityDetails();
$teacher1->getTeacherDetails();
