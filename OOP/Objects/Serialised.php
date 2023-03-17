<?php

class Post {
	public $post;

	function __construct($post) {
		$this->post = $post;
	}
}

/*$post1 = new Post("Test String Methods");
echo $post1->post . PHP_EOL;
$serialised = serialize($post1);
echo $serialised . PHP_EOL;
file_put_contents("posts.txt", $serialised);*/

$unserialised = file_get_contents("posts.txt");
$post2 = unserialize($unserialised);
echo $post2->post . PHP_EOL;