<?php

declare(strict_types=1);

class Posts{
	private $properties = "";

	function getProperties() : string {
		return $this->properties;
	}

	function setProperties(string $properties) : void {
		$this->properties = $properties;
	}

	function savePost() : bool {
		$flag = false;
		echo "Saving posts in Database" . PHP_EOL;
		$flag = true;
		return $flag;
	}

	function fetchPost(int $id) : array {
		$posts = [];
		echo "Retriving all posts" . PHP_EOL;
		$posts = [1, "This is a test post", 2, "Type Hinting is good"];
		return $posts;
	}
}

$post1 =  new Posts();
$post1->setProperties("This is a test values for saving and fetching posts");
echo $post1->savePost();
var_dump($post1->fetchPost(2)); 