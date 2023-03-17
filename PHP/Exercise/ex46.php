<?php

$language = "PHP";
$closures = function () {
$a = 10;
$b = 20;
return $a + $b;
echo $language . PHP_EOL;
};
echo $closures() . PHP_EOL;

$hakuna = function () use ($language) {
echo $language . PHP_EOL;
};
$hakuna();
