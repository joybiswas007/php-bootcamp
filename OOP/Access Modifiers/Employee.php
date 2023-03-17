<?php

class Employee {
	private $id;
	private $name;
	private $workingHourPerDay = 8;
	private $hourlyRate = 15;
	private $workingDays;
	private $totalLeaveTaken;

	function __construct($id, $name, $totalLeaveTaken) {
		$this->id = $id;
		$this->name = $name;
		$this->totalLeaveTaken = $totalLeaveTaken;
	}

	function getSalaryAmount($totalDays) {
		$this->workingDays = $totalDays - $this->totalLeaveTaken;
		$salary = $this->workingDays * $this->workingHourPerDay * $this->hourlyRate;
		return $salary;
	}

	function getName() : string {
		return $this->name;
	}

	function getWorkingDays()  : int {
		return $this->workingDays;
	}

	function getTotalLeaveTaken() : int {
		return $this->totalLeaveTaken;
	}
}

$emp1 = new Employee(101, "Peter Griffin", 3);

$salary = $emp1->getSalaryAmount(21);

echo $emp1->getName() . " has worked for " . $emp1->getWorkingDays() . " days and taken " . $emp1->getTotalLeaveTaken() . " leaves." . PHP_EOL;
echo $emp1->getName() . "'s salary $salary$" . PHP_EOL;