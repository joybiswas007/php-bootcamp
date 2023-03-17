<?php

class Car {
	public $color;
	public $name;

	function carDetails($color, $name){
		echo "Car Name: " . $name . ' && ' . "Color: " . $color . PHP_EOL;
	}
}

$car = new Car();
$car1 = new Car();

$car->carDetails("Red", "BMW");
$car1->carDetails("Blue", "Nissan");
