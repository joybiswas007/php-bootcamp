<?php

trait DataBase {
	function getRecords() {
		echo "Fetching records..." . PHP_EOL;
	}
}

class University {
	use DataBase;

	function connectDB() {
		$this->getRecords();
	}
}

$uni = new University();

$uni->connectDB();