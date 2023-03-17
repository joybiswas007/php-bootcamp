<?php

class Files {
	function displayContent($filename) {
		if (!file_exists($filename)) {
			echo "$filename doesn't exist" . PHP_EOL;
			return;
		}
		echo file_get_contents($filename) . PHP_EOL;
	}

	function getContent($filename) {
		if (!file_exists($filename)) {
			echo "$filename doesn't exist" . PHP_EOL;
			return;
		}
		$content = file_get_contents($filename);
		return $content;
	}
}

$file = new Files();
$file->displayContent("Test.txt");
echo $file->getContent("Test.txt");