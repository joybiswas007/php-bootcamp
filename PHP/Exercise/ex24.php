<?php
$fileName = "elseif.php";


if (!file_exists($fileName)) {
	if (!is_file($fileName)) {
		die("No Such Files!");
	}
}
echo file_get_contents($fileName);

$fileHandler = fopen($fileName, "r");
$fileSize = filesize($fileName);

echo fread($fileHandler, $fileSize) . PHP_EOL;
fclose($fileHandler);


$file = "Cat.txt";

$fileHandler = fopen($file, "w") or die("Unable to write file!");

fwrite($fileHandler, "This is a test string to prints texts");

fclose($fileHandler);

file_put_contents("Text.txt", "Hello This is a test string!");
