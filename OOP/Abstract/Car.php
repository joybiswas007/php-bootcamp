<?php

abstract class Car {
	abstract public function applyBreak();
	function increaseSpeed() {
		echo "Increasing Speed" . PHP_EOL;
	}
	function decreaseSpeed() {
		echo "Decreasing Speed" . PHP_EOL;
	}

}

class SportsCar extends Car{
	function applyBreak() {
		echo "Applying Break" . PHP_EOL;
	}
}
$car = new SportsCar();
$car->increaseSpeed();