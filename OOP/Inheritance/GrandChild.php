<?php

class Linux{
	protected $kernel;
	function OS() {
		echo "Hello from OS, class" . PHP_EOL;
	}
}

class Arch extends Linux{
	function __construct($kernel) {
		$this->kernel = $kernel;
	}

	function printKernel() {
		if ($this->kernel != "LTS") {
			die("You need an LTS version of kernel to run this application!") . PHP_EOL;
		}
		echo "Kernel Type: " . $this->kernel . PHP_EOL;
	}
}

class Manjaro extends Arch {

	function printOS() {
		echo "OS Name: "  . `screenfetch` . PHP_EOL;
	}
}


$os1 = new Manjaro("LTS");
$os1->printKernel();
$os1->printOS();
$os1->OS();
