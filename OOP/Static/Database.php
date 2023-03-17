<?php

class Database {

	static function DBName($dbtype) {
		if ($dbtype == "MySQL") {
			echo "MySQL Version: " . `mysql --version` . PHP_EOL;
		} else {
			die("MySQL NOT installed.");
		}
	}
}

Database::DBName("MySQL");