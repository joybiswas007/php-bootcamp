<?php
class Files{
	function displayContent($filename) : bool {
		$result = true;
		try {
		$fileHandler = fopen($filename, "r");
		$fileSize = filesize($filename);
		echo "Reading the file: " . $filename . PHP_EOL;
		echo fread($fileHandler, $fileSize) . PHP_EOL;
		fclose($fileHandler);
		} catch (Exception $e) {
			$result = false;
		}
		return $result;
	}
}

$files = new Files();
$files->displayContent("Car.php");