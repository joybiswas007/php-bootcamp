<?php

$fileName = "Hello.txt";

if( file_exists($fileName) ) {
	echo "File Exists" . PHP_EOL;
	if(is_dir($fileName)) {
		echo "Directory exists!" . PHP_EOL;
	}
	copy($fileName, "SayNoHello.txt");
	copy("SayNoHello.txt", "RHello.txt");

	rename("RHello.txt", "RenamedHello.txt");

	unlink("RenamedHello.txt");
	
} else {
	echo "No such file / directory" . PHP_EOL;
	die("No such file exists!");
}