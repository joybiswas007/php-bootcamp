<?php

class Phone {
	protected $name;
	protected $price;

	function showPrice() {
		echo "Phone Name $this->name and price is $this->price Euro" . PHP_EOL; 
	}
}

class Android extends Phone {
	function __construct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}
}

class Pine extends Phone {
	function __construct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}
}

$android1 = new Android("Samsung", 1000);
$android1->showPrice();

$pine = new Pine ("Pine Phone", 150);
$pine->showPrice();