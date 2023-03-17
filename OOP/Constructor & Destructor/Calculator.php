<?php

// 1) Improve the Calculator Class with Construct and Destruct methods.

class Calculator {

public $a;
public $b;
public $result;

function __construct($a, $b) {
	$this->a = $a;
	$this->b = $b;
}

function Add() {
	return $this->result = $this->a + $this->b;
}

function displayResult() {
	echo"Add: $this->a" . ' + ' . "$this->b = " . $this->Add() . PHP_EOL;
}

function __desctructor() {
	echo "Closing the connection!" . PHP_EOL;
}
}

$calc = new Calculator(10, 5);
$calc->displayResult();