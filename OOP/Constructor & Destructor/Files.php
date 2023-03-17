<?php

/*1) Write File Class
2) Pass the filename to Constructor
3) Check if the fileexists in constructor
4) If file is found then open the file using fopen method
5) Write method getContent to get the content of the file
6) Write Destructor method to close the file if file is already opened.*/

class Files{
	public $filename;
	public $fileHandler;
	public $fileSize;

	function __construct($filename) {
		$this->filename = $filename;
		if ( !file_exists($filename) ) {
			die ("$filename NOT found!") . PHP_EOL;
		}
		if (!is_file($filename)){
			die ("NOT a valid file type!") . PHP_EOL;
		}
		$this->fileHandler = fopen($filename, "r");
		$this->filesize = filesize($filename);
	}

	function getContent() {
		echo fread($this->fileHandler, $this->filesize) . PHP_EOL;
	}

	function __destruct() {
		fclose($this->fileHandler);
		echo "Closing the file: $this->filename" .  PHP_EOL;
	}
}

$file = new Files("Test.txt");
$file->getContent();