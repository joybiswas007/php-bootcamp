<?php

abstract class Files{
	abstract function fileRead();
	protected $fileName;
	protected $fileHandler;
	protected $fileSize;
}

class FileHelper extends Files{
	function __construct($fileName) {
		$this->fileName = $fileName;
	}

	function fileRead() {
		$this->fileHandler = fopen($this->fileName, "r");
		$this->fileSize = filesize($this->fileName);
		echo fread($this->fileHandler, $this->fileSize) . PHP_EOL;
		return $this;
	}

	function fileSize() {
		$this->fileSize = filesize($this->fileName);
		echo "Filename: " . $this->fileName . "\n" . "Filesize: " . $this->fileSize . PHP_EOL;
		return $this;
	}

	function __destruct() {
		fclose($this->fileHandler);
		echo "Closing the file: " . $this->fileName . PHP_EOL;
	}
}

$file = new FileHelper("Car.php");
$file->fileRead()->fileSize();