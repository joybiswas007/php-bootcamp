<?php

class Calculator {
	public $a;
	public $b;
	public $result;

	function getA() : int {
		return $this->a;
	}

	function setA($a){
		$this->a = $a;
	}

	function getB() : int {
		return $this->b;
	}

	function setB($b) {
		$this->b = $b;
	}

	function getResult() : int {
		return $this->result;
	}

	function setResult($result) {
		$this->result = $result;
	}

	function Add() {
		return $this->result = $this->a + $this->b;
	}

	function getResults() {
		echo "Result: " . $this->Add() . PHP_EOL;
	}
}

$calc = new Calculator();

$calc->setA(10);
$calc->setB(20);

$calc->getResults();