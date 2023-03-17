<?php

define("LANGUAGE", "PHP");

$LANGUAGE = LANGUAGE;

echo $LANGUAGE;

echo "Let's print LANGUAGE constant here";
echo "I Like to work with $LANGUAGE" . PHP_EOL;
echo "I'm learning" . ' ' . LANGUAGE . PHP_EOL;

echo constant('LANGUAGE');

define("LANGUAGE", "JAVA");
echo constant('LANGUAGE');