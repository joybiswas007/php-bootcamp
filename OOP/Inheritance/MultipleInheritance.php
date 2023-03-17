<?php

class University {
	function hello() {
		echo "Hello from University Class" . PHP_EOL;
	}
}

class Teacher extends University {
	protected $teacherName = "Jane";
	protected $workingHours = 10;

	function getName() : string {
		return $this->teacherName;
	}

	function calculateSalary($perHour) {
		return $this->workingHours * $perHour;
	}
}

class PartTimeTeacher extends Teacher {
	protected $teacherName = "June";
	protected $workingHours = 30;

		function getName() : string {
		return $this->teacherName;
	}

	function calculateSalary($perHour) {
		return $this->workingHours * $perHour;
	}
}

$teacher1 = new Teacher();
$teacher1->hello();
echo "Teacher Name: " . $teacher1->getName() . ' and Salary: ' . $teacher1->calculateSalary(10) . PHP_EOL;
echo PHP_EOL;
echo "..............." . PHP_EOL;
echo PHP_EOL;
$teacher2 = new PartTimeTeacher();
echo "Teacher Name: " . $teacher2->getName() . ' and Salary: ' . $teacher2->calculateSalary(10) . PHP_EOL;

