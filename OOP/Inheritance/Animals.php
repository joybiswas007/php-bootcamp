<?php
class Animals {
	protected $name;
	protected $hunt = false;

	function doesHunting() {
		if ($this->hunt) {
			echo "It Hunts" . PHP_EOL;
		} else {
			echo "It doesn't Hunts" . PHP_EOL;
		}
	}
}

class Dog extends Animals{
	function __construct($name, $hunt) {
		$this->name = $name;
		$this->hunt = $hunt;
	}

	function makeSound() {
		echo "Woof! Woof! Woof!..." . PHP_EOL;
	}
}

class Tiger extends Animals{
	function __construct($name, $hunt) {
		$this->name = $name;
		$this->hunt = $hunt;
	}

	function makeSound() {
		echo "Grrr! Grrr! Grrr!" . PHP_EOL;
	}
}

$dog1 = new Dog("Hush Puppies", false);
$dog1->doesHunting();
$dog1->makeSound();

$tiger1 = new Tiger("Royal Bengal", true);
$tiger1->doesHunting();
$tiger1->makeSound();
