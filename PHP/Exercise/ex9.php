<?php
global $name;
$name = "Batman";

function hello(){
	echo "I'm " . $GLOBALS['name'] . PHP_EOL;
	echo "Executing Sctiptname: " . $_SERVER['PHP_SELF'] . PHP_EOL;
}

hello();

echo isset($name) ? "Name is Set." : "Name NOT Set." . PHP_EOL;

define("LANGUAGE", "PHP");

function printing_constant(){
	echo LANGUAGE . " learning is fun." . PHP_EOL;
}

printing_constant();

$value = 10;
echo $value . PHP_EOL;

echo $value++ . PHP_EOL;
echo $value . PHP_EOL;

echo ++$value . PHP_EOL;

$name = "Sex";
$want = "name";

echo $want . PHP_EOL;
echo $$want . PHP_EOL;