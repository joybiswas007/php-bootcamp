<?php

class Helper {
	static function fileChecker($fileName) : bool {
		if ( !file_exists($fileName) ) {
			die("$fileName doesn't exist.");
			return false;	
		}

		$content = file_get_contents($fileName);
		if ( !empty($content) ) {
			return true;
		} else {
			return false;
		}
	}
}

if ( Helper::fileChecker("Test.txt") ) {
	echo "Data Found" . PHP_EOL;
} else {
	echo "Data NOT Found" . PHP_EOL;
}