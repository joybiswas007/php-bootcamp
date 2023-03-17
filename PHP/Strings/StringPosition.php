<?php

$content = "This is a very long text.";
$contentWord = "very";
$position = strpos($content, $contentWord);
echo $position . PHP_EOL;

if (!0) {
	echo "value allowed" . PHP_EOL;
} else {
	echo "value not allowed" . PHP_EOL;
}
if ($position === 0){
	echo "value allowed" . PHP_EOL;
} else {
	echo "value not allowed" . PHP_EOL;
}