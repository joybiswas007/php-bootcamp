<?php

class University {
	protected $universityName = "MIT";

	function helloUniversity() {
		echo "University Name: " . $this->universityName . PHP_EOL;
	}
}

class Teacher extends University {
	public $teacherName = "Peter Griffin";

	function helloTeacher() {
		echo "Teacher Name: " . $this->teacherName . PHP_EOL;
	}

	function getUniversity () : string {
		return $this->universityName;
	}
}

$teacher = new Teacher();

$teacher->helloUniversity();

$teacher->helloTeacher();

echo "University: " . $teacher->getUniversity() . PHP_EOL;