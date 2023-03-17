<?php

$fileName = "Test1.txt";

 if(!file_exists($fileName)) {
 	if (!is_file($fileName)) {
 		die("No Such File!");
 	}
 }

$content = file_get_contents($fileName);
echo $content;
echo PHP_EOL;

$fileHandler = fopen($fileName, "a");
fwrite($fileHandler, " Another string");

fclose($fileHandler);

