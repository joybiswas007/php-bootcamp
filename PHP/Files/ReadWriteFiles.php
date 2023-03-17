<?php

$fileName = "SayNoHello.txt";

if (!file_exists($fileName)) {
	if (!is_file($fileName)) {
		die("NO Such file!");
	}
}
$content = file_get_contents($fileName);
echo $content . PHP_EOL;

//Open the file

$fileHandler = fopen($fileName, "r");
$fileSize = filesize($fileName);

//Read the file

$file = fread($fileHandler, $fileSize);
echo $file . PHP_EOL;

//close the file

fclose($fileHandler);


//Writing Files

$file1 = "dummy.txt";

file_put_contents($file1, "hakunabata");

//Method 2

$file2 = "cat.txt";

$fileHandler = fopen($file2, "w");
$fileSize = filesize($file2);

$content = fwrite($fileHandler, "This is a modified text for test purpose") or die("Unable to write!");

fclose($fileHandler);
