<?php

$data = "squareforthewin@gmail.com";

$arr = explode("@", $data);

echo "Username: " . $arr[0] . PHP_EOL;
echo "Domain Name: " . $arr[1] . PHP_EOL;


function password($character) {
	$data = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ[]{}~!@#$%^&*()";
	$pass = substr(str_shuffle($data), 0, $character);
	return $pass;
}

echo password(50) . PHP_EOL;

$filename = 'Arrays.php';

for reading files method 1;

$fileHandler = fopen($filename, "r");

$filesize = filesize($filename);

echo fread($fileHandler, $filesize) . PHP_EOL;

fclose($fileHandler);

For reading files method 2;

$content = file_get_contents($filename);

echo $content;

For writing Files Method 1; 

$content = file_put_contents($filename, " This is a test");

For writing files method 2
Handler, Write, Close;

$fileHandler = fopen($filename, "w");

fwrite($fileHandler, " Whatever you want to write");

fclose($fileHandler);

$file = 'pwds.csv';

$arr = file($file);

$data = [];

foreach ($arr as $key => $value) {
	$data[$key] = str_getcsv($value);
}

$arr2 = array_map('str_getcsv', $arr);

print_r($arr2);

$conf = 'config.ini';

$arr3 = parse_ini_file($conf);
print_r($arr3);