<?php

trait fileHelper{

	function getFileSize($fileName) {
		return filesize($fileName);
	}
}

class Post {
	use fileHelper;

	function displayFileSize($fileName) {
		return $this->getFileSize($fileName);
	}
}

$size = new Post();
echo $size->displayFileSize("MultipleTraits.php") . PHP_EOL;