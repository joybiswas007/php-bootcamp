<?php

class Database{
	function getConnection() {
		echo "Default connection is MySQL." . PHP_EOL;
	}
}

class OracleDatabase extends Database{
	function getConnection() {
		echo "Connecting to Oracle Database." . PHP_EOL;
		//parent::getConnection();
	}
}

$oracle = new OracleDatabase();
$oracle->getConnection();