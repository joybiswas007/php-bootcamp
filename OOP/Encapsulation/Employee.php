<?php

abstract class Company {
	private $number;
	private $licenseNo;
		abstract function getSekretInfo();
}

class Manager extends Company {
	private $id;
	private $permission = false;

	function __construct($id, $permission, $number, $licenseNo) {
		$this->id = $id;
		$this->permission = $permission;

		$this->number = $number;
		$this->licenseNo = $licenseNo;
	}

	function getSekretInfo() {
		echo "Number: " . $this->number . PHP_EOL;
		echo "licenseNo: " . $this->licenseNo . PHP_EOL;
	}

	function printManagerDetails() {
				if ($this->permission == false) {
			die("Not enough permission!");
		}
		echo "Manager ID: " . $this->id . PHP_EOL;
		echo "Got Permission: " . $this->permission . PHP_EOL;
	}

}

$manager = new Manager(101, true, 362436, 169);

$manager->getSekretInfo();
$manager->printManagerDetails();