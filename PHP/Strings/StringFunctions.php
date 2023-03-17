<?php
/*1) Learn to use the following String Functions
	- Number of Words
	- Replace Strings
	- Reverse Strings
	- Remove White Spaces
	- Shuffle Strings
 	- Find Position case insenstive.
	- Upper and Lowercase
	- Word Wrap the String and display it.
	*/

	$content = "You can use functions to operations on strings";

	echo $content . PHP_EOL;

	echo "Number of Words: " . str_word_count($content) . PHP_EOL;
	echo str_replace("operations", "manipulations", $content) . PHP_EOL;
	echo "Reversing the String: " . strrev($content) . PHP_EOL;
	$value = "         This is a              test    ";
	echo $value . PHP_EOL;
	echo "Removing White Spaces: " . trim($content) . PHP_EOL;
	echo "Shuffling Strings: " . str_shuffle($content) . PHP_EOL;
	echo "Insesitive Position: " . stripos($content, "OPERATIONS"). PHP_EOL;
	echo "Upper Case: " . strtoupper($content) . PHP_EOL;
	echo "Lower Case: " . strtolower($content) . PHP_EOL;
	echo "Word Wrapping: " . wordwrap($content, 1) . PHP_EOL;