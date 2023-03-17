<?php

abstract class Company{
	private $name;

	function getName() : string {
		return $this->name;
	}

	function setName($name) {
		$this->name = $name;
	}

	abstract function setExpert($subject);
}

class Employee extends Company {
	protected $subject;
	
	function setExpert($subject) {
		$this->subject = $subject;
	}

	function getExpert() : string {
		return $this->subject;
	}
}

$emp1 = new Employee();
$emp1->setName("OVH");
$emp1->setExpert("Data Center");

echo "Company Name: " . $emp1->getName() . PHP_EOL;
echo "Expert: " . $emp1->getExpert() . PHP_EOL;