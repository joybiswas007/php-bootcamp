<?php

/*Assignments: Create Car Class with Access Modifiers

1) Define Properties as private
2) Define Getter and Setter Methods
3) Define public methods like increaseSpeed and DecreaseSpeed*/

class Car {
	private $name;
	private $color;

	function getName() : string {
		return $this->name;
	}

	function setName($name) {
		$this->name = $name;
	}

	function getColor() : string {
		return $this->color;
	}

	function setColor($color) {
		$this->color = $color;
	}

	function increaseSpeed() {
		echo "Increasing speed...." . PHP_EOL;
	}

	function decreasingSpeed() {
		echo "decreasing speed...." . PHP_EOL;
	}

}

$car = new Car();

$car->setName("Nissan");
$car->setColor("Blue");

echo "Car Name: " . $car->getName() . " && Car Color: " . $car->getColor() . PHP_EOL;

$car->increaseSpeed();
$car->decreasingSpeed();