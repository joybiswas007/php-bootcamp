<?php

trait DataBase {
	function getRecords() {
		echo "Fetching records..." . PHP_EOL;
	}
}

trait StringHelper {
	function removeSpaces($str) {
		return trim($str);
	}
}

class University {
	use DataBase;
	use StringHelper;

	function connectDB() {
		$this->getRecords();
		echo $this->removeSpaces("          This is a test          ") . PHP_EOL;
	}
}

$uni = new University();

$uni->connectDB();