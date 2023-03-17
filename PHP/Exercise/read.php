<?php
$filename = "ex15.php";

$fileHandler = fopen($filename, "r");
$fileSize = filesize($filename);
echo fread($fileHandler, $fileSize) . PHP_EOL;
fclose($fileHandler);

$content = file_get_contents($filename);

echo $content . PHP_EOL;