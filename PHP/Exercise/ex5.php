<?php

global $name;
$name = "Stewart";

function hello(){
	echo "Hello, " . $GLOBALS['name'] . PHP_EOL;
	echo "Executing Scriptname: " . $_SERVER['PHP_SELF'] . PHP_EOL;
}
hello();

echo "Counting numbers:" . PHP_EOL;
function kount(){
	static $count = 1;
	echo $count . PHP_EOL;
	$count = $count + 1;
}

kount();
kount();
kount();
kount();
kount();
kount();