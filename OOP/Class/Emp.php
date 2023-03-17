<?php

class Emp {
	public $id;
	public $emp_name;
	public $workingHoursPerDay = 8;
	public $hourlyRate = 10;
	public $totalLeaveTaken;
	public $workingDays;

	function getSalaryAmount($totalDays) : int  {
		$this->workingDays = $totalDays - $this->totalLeaveTaken;
		$salary = $this->workingDays * $this->hourlyRate * $this->workingHoursPerDay;
		return $salary;
	}
}

$emp1 = new Emp();

$emp1->id = 101;
$emp1->emp_name = "John, Smith";
$emp1->totalLeaveTaken = 4;
$salary = $emp1->getSalaryAmount(21);

echo "$emp1->emp_name, ID: $emp1->id has worked $emp1->workingDays days and taken $emp1->totalLeaveTaken leaves." . PHP_EOL;
echo "$emp1->emp_name salary $salary$." . PHP_EOL;