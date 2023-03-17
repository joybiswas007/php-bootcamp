<?php
 abstract class File{
 	abstract function checkFile($fileName);
 	static $fileName;
 	static $fileHandler;
 	static $fileSize;

 	static function readFile($fileName) {
 		Self::$fileHandler = fopen($fileName, "r");
 		Self::$fileSize = filesize($fileName);
 		echo fread(Self::$fileHandler, Self::$fileSize) . PHP_EOL;
 		fclose(Self::$fileHandler);
 	}
}

class FileHelper extends File{
	function checkFile($fileName) {
		if ( !is_file($fileName) ) {
			die("$fileName is NOT a valid file");
		}

		if (!file_exists($fileName)) {
			die("$fileName doesn't exists");
		}

	}
}

$file = new FileHelper();
$file->readFile("Test.txt");
$file->checkFile("Test.txt");