<?php

class Post{
	public $post;

	function __construct($post) {
		$this->post = $post;
	}
}

/*$post1 = new Post("This is a test post");

$serialize = serialize($post1);
echo $serialize . PHP_EOL;
file_put_contents("post.txt", $serialize);
*/

$unserialized = file_get_contents("post.txt");

$post2 = unserialize($unserialized);

echo $post2->post . PHP_EOL;