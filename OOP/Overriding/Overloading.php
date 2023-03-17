<?php

class Employee{
	public $workingHours = 600;
	public $hourlyRate = 10;

	function calculateSalary() {
		return $this->workingHours * $this->hourlyRate;
	}

	function calculateSalary($workingHours, $hourlyRate) {
		return $this->workingHours * $this->hourlyRate;
	}
}

$emp1 = new Employee();

echo $emp1->calculateSalary() . PHP_EOL;