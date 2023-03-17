<?php

abstract class Database{
	public $connection;
	public $connectionActive = false;

	abstract function getConnection();
	abstract function setConnection($dbname);
}

class DBConnection extends Database{

	function setConnection($dbname) {
		$this->connection = "Connecting to database handler";
		$this->connectionActive = true;
	}

	function getConnection() {
		if ($this->connectionActive) {
			return $this->connection;
		}
	}
}

$db = new DBConnection();
$db->setConnection("MySQL");
echo $db->getConnection() . PHP_EOL;