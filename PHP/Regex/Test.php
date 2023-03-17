<?php

$pattern = "/SS/i";

$text = "This a test stuff for  regex testing";

if(preg_match($pattern, $text)) {
	echo "Match Found!" . PHP_EOL;
} else {
	echo "Match NOT Found!" . PHP_EOL;
}