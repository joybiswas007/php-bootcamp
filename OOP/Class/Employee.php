<?php
class Employee {
	public $id;
	public $name;
	public $workingHoursPerDay = 8;
	public $hourlyRate = 10;
	public $totalLeaveTaken;
	public $workingDays;

	function getSalaryAmount($totalDays) : int {
		$this->workingDays = $totalDays - $this->totalLeaveTaken;
		$salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
		return $salary;
	}
}

$emp1 = new Employee();
$emp1->id = 101;
$emp1->name = "John, Smith";
$emp1->totalLeaveTaken = 3;
$salary = $emp1->getSalaryAmount(21);

echo "$emp1->name, ID: $emp1->id, has worked for $emp1->workingDays days and taken $emp1->totalLeaveTaken leaves." . PHP_EOL;
echo "$emp1->name salary is $salary$" . PHP_EOL;