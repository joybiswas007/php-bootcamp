<?php

$fileName = "Test1.txt";

if(!file_exists($fileName)) {
	if (!is_file($fileName)) {
		die("No Such File or directory!");
	}
}

$fileHandler = fopen($fileName, "w");
$fileSize = filesize($fileName);

$content = fwrite($fileHandler, "This is a test file to print wrtite function.");

fclose($fileHandler);

file_put_contents("Test1.txt", " This is some more text", FILE_APPEND);