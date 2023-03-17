<?php

final class Kernel{
	private $updateInstructions = "Updates Available!";

	function getUpdate() : int {
		return $this->updateInstructions;
	}

	final function updateNow() {
		echo $this->updateInstructions . PHP_EOL;
	}
}

$kernel = new Kernel();
$kernel->updateNow();