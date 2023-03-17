<?php

$addFunction = function ($a, $b) {
	$add = $a + $b;
	return $add;
};

echo $addFunction(2, 4) . PHP_EOL;

$content = "This is a string.";

$printContent = function () use ($content) {
	return $content . PHP_EOL;
};

echo $printContent();