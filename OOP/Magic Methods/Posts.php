<?php
class Posts{
	function __call($name, $arguements) {
		echo $name . PHP_EOL;
		var_dump($arguements);
	}
}

$post1 = new Posts();

$post1->createPost("This is a test", 10);