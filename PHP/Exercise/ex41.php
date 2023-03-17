<?php

$filename = "ex40.php";

// echo file_get_contents($filename) . PHP_EOL;

$fileHandler = fopen($filename, "r");
echo "Current Directory: " . __DIR__ . PHP_EOL;
$fileSize = filesize($filename);
echo "Current Line: " . __LINE__ . PHP_EOL;
echo fread($fileHandler, $fileSize);

fclose($fileHandler);

echo "File Name: " . __FILE__ . PHP_EOL; //This is a new line of text
