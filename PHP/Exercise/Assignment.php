<?php
$firstname = "Joy";
$lastname = "Biswas";
$fullname = $firstname . ' ' . $lastname . PHP_EOL;
echo "My Name is: " . $fullname . PHP_EOL;

$fullName = "Joy Biswas" . PHP_EOL;

echo "\$fullName: " . $fullName . PHP_EOL;

function name(){
	$fullName = "Joy Biswas";
	echo $fullName;
}
name();

global $age;
$age = 21;

function age(){
	echo "I'm " . $GLOBALS['age'] . " years old." . PHP_EOL;
}
age();

function static_variables(){
	static $count = 1;
	echo $count;
	$count++;
}
static_variables() . PHP_EOL;
static_variables() . PHP_EOL;
static_variables() . PHP_EOL;
static_variables() . PHP_EOL;
static_variables() . PHP_EOL;

echo "Executing Scriptname: " . $_SERVER['PHP_SELF'] . PHP_EOL;

$gender = "male";
$sex = "gender";

echo $sex;
echo $$sex;

echo "This is Line no " . __LINE__ . PHP_EOL;
echo "File Path " . __FILE__ . PHP_EOL;
echo "Directory " . __DIR__ . PHP_EOL;
echo (isset($sex)) ? "Value is set" : "Value NOT set" . PHP_EOL;

define("FILE_TYPE", "PHP");
function glo(){
	echo FILE_TYPE;
}
glo();
