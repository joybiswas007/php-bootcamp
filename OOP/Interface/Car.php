<?php

interface Car{
	public function increaseSpeed();
	public function decreaseSpeed();
	public function applyBreaks();
}

interface CarModel{
	public function setModel($model);
	public function getModel() : string ;
}

class SportsCar implements Car, CarModel {

	function increaseSpeed() {
		echo "Increasing Speed" . PHP_EOL;
	}

	function decreaseSpeed() {
		echo "Decreasing Speed" . PHP_EOL;
	}

	function applyBreaks() {
		echo "Applying Breaks" . PHP_EOL;
	}

	function getModel() : string {
		return $this->model;
	} 

	function setModel($model) {
		$this->model = $model;
	}
}

$car1 = new SportsCar();
$car1->setModel("Nissan");
echo "Car Model: " . $car1->getModel() . PHP_EOL;
$car1->increaseSpeed();
$car1->decreaseSpeed();
$car1->applyBreaks();