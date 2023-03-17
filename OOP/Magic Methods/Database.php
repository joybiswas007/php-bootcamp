<?php

class Database{
	public $db = "MySQL";
	public $dbName = "gazelle";
	public $dbTable = "user_id";

	function hello () {
		return "Hello" . PHP_EOL;
	}

	function __debuginfo() {
		echo "Take control via the Debug Info method" . PHP_EOL;
	}

	function __toString() {
		return "Print Properties" . PHP_EOL;
	}
}

$db = new Database();
print $db . PHP_EOL;
echo $db . PHP_EOL;
var_dump($db);