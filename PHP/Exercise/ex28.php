<?php
/*1) Find a Length of a String
2) Find a Field inside the String
3) Write a Documentation about your program using heredoc
4) Show some examples of String Functions.*/

$str = "This is a test string for practice";

$length = strlen($str);

echo "The Length of the string is: " . $length . PHP_EOL;

$findWord = "string";
$field = strpos($str, $findWord);

echo "The Position is: " . $field . PHP_EOL;

$upper = strtoupper($str);

echo $upper . PHP_EOL;

$lower = strtolower($str);

echo $lower . PHP_EOL;

echo <<< DOC_LABEL
<?php
Hakuna Mata// This is a Test Here Doc File;

?>
DOC_LABEL;

echo <<< 'LABEL'
<?= '' ;?>;
This is a test Nowdoc file;

LABEL;