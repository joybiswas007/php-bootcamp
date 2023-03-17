<?php 
class Employee {
	public $id;
	public $name;
	public $workingHoursPerDay = 8;
	public $hourlyRate = 15;
	public $workingDays;
	public $totalLeaveTaken;

	function __construct($id, $name, $totalLeaveTaken) {
		$this->id = $id;
		$this->name = $name;
		$this->totalLeaveTaken = $totalLeaveTaken;
	}
	function getSalaryAmount($totalDays) {
		$this->workingDays = $totalDays - $this->totalLeaveTaken;
		$salary = $this->workingDays * $this->hourlyRate * $this->workingHoursPerDay;
		return $salary;
	}

	function __destruct() {
		echo "Performing cleanup activities" . PHP_EOL;
	}
}

$emp = new Employee(101, "Peter, Griffin", 4);
$salary = $emp->getSalaryAmount(21);
echo "$emp->name has worked for $emp->workingDays and taken $emp->totalLeaveTaken leaves" . PHP_EOL;
echo "Salary of $emp->name is $salary$" . PHP_EOL;