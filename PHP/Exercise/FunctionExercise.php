<?php
/* 1) Find a Length of a String
2) Find a Field inside the String
3) Write a Documentation about your program using heredoc
4) Show some examples of String Functions. */
$text = "This is a very long string for printing text";
$find = "long";
$position = strpos($text, $find);
echo $text . PHP_EOL;
echo strlen($text) . PHP_EOL;
echo "String Position: " . $position . PHP_EOL;
echo <<< HELLO
Example of Heredoc, variable interpolation works here.
$find;
$text;
HELLO;

echo <<< 'NOWDOC'
Example of Nowdoc Nothing works here not even the variables;
NOWDOC;


