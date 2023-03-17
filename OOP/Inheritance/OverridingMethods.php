<?php

class University {
	protected $universityName = "MIT";

	function hello() {
		echo "Hello from University Class" . PHP_EOL;
	}
}

class Teacher extends University {
		function hello(){
			echo "Hello from Teacher Class" . PHP_EOL;
			parent::hello();
		}

		function getUniversityName() : string {
		return $this->universityName;
	}
}

$teacher1 = new Teacher();
echo "University Name: " . $teacher1->getUniversityName() . PHP_EOL;
$teacher1->hello();