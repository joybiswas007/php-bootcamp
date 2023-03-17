<?php

//Sample 1

$path = "Test";
$result = scandir($path);
var_dump($result);

foreach($result as $dir) {
	if($dir != '.' && $dir != '..'){
		echo $dir . PHP_EOL;
	}
}

$directory = array_diff($result, ['.', '..']);
var_dump($directory);
foreach ($directory as $dir) {
	echo $dir . PHP_EOL;
}

//Sample 2 & 3

$path = "Test";
$directory = array_diff($result, ['.', '..']);
foreach($directory as $dir) {
	if(is_file($path . "/" . $dir)) {
		echo $dir . PHP_EOL;
	}
}
 
 foreach($directory as $dir) {
	if(is_dir($path . "/" . $dir)) {
		echo $dir . PHP_EOL;
	}
}

//Sample 4

$dir = glob("*.php");
var_dump($dir);


//Check if file exist or NOT

if( !file_exists("Test1") ) {
	mkdir("Test1");
}

//Copy files from one place to another

copy("FileDirectories.php", "Test1/FileDirectories1.php");