<?php

class Dog {
	private $color;
	private $breed;

	function getColor() : string {
		return $this->color;
	}

	function setColor($color) {
		$this->color = $color;
	}

	function getBreed() : string {
		return $this->breed;
	}

	function setBreed($breed) {
		$this->breed = $breed;
	}

	function dogBark() {
		echo "Woof! Woof! Woof!..." . PHP_EOL;
	}

	function dogSleep() {
		echo "ZZZZZZZZzzzzz...." . PHP_EOL;
	}
}

$dog1 = new Dog ();

$dog1->setColor("Black");
$dog1->setBreed("German Shepard");

echo "Dog's Breed: " . $dog1->getBreed() . PHP_EOL;
echo "Dog's Color: " . $dog1->getColor() . PHP_EOL;

$dog1->dogBark();
$dog1->dogSleep();