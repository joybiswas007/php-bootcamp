<?php

spl_autoload_register( function ($classname) {
	echo "Loading from file: " . $classname . PHP_EOL;
	require_once "$classname.php";
}
	);


$files = New Library\Files();
$files->hello();

$db = New Library\Database();
$db->hello();