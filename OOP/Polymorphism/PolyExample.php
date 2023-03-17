<?php

interface Animal{
	function makeSound();
}

class Dog implements Animal {
	function makeSound() {
		echo "Woof! Woof! Woof!..." . PHP_EOL;
	}
}

class Cat implements Animal {
	function makeSound() {
		echo "Meow Meow Meow..." . PHP_EOL;
	}
}

$dog1 = new Dog();
$dog1->makeSound();

$cat1 = new Cat();
$cat1->makeSound();