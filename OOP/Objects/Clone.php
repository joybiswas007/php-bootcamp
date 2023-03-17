<?php

class Posts{
	public $post;
	 function __construct($post) {
	 	$this->post = $post;
	 }
}

$post1 = new Posts("This is a test");

echo $post1->post . PHP_EOL;

$post2 = clone $post1;

echo $post2->post . PHP_EOL;

$post1->post = "This is modified test";

echo $post2->post . PHP_EOL;

echo $post1->post . PHP_EOL;

