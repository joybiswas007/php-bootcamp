<?php

declare(strict_types=1);

class University{
	private $universityName = "";

	function getUniversityName() : string {
		return $this->universityName;
	}

	function setUniversityName(string $universityName) : void {
		$this->universityName = $universityName;
	}
}

class Student extends University{
	private $studentID = "";
	private $studentName = "";

	function setDetails(array $students, University $uni) : void {
		$this->studentID = $students['id'];
		$this->studentName = $students['name'];
		$this->setUniversityName( $uni->getUniversityName() );
	}
}

$uni = new University();
$uni->setUniversityName("MIT");

echo "Unviersity Name: " . $uni->getUniversityName("MIT") . PHP_EOL;

$s = new Student();
$student = ['id' => 101, "name" => "Jane"];
$s->setDetails($student, $uni);
var_dump($s);