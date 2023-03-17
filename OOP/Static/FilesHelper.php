<?php

class FilesHelper{
	
	static function hasData($filename) : bool {
		if ( !file_exists($filename) ) {
			die("$filename doesn't exist");
			return false;
		}
		 $content = file_get_contents($filename);

		if ( !empty($content) ) {
			return true;
		} else {
			return false;
		}
	}
}

if ( FilesHelper::hasData("Test.txt") ) {
	echo "Data Found" . PHP_EOL;
} else {
	echo "Data NOT Found" . PHP_EOL;
}
