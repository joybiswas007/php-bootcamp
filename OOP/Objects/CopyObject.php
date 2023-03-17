<?php

class Copy {

	public $post;
	public $hasPost = true;

	function __construct($post) {
		$this->post = $post;
	}
}

	function CopyObject(Copy $Obj1, Copy $Obj2) {
		$Obj2->post = $Obj1->post;
		$Obj2->hasPost = $Obj1->hasPost;
	}

$copy1 = new Copy("First Post");
$copy2 = new Copy("Second Post");

CopyObject($copy1, $copy2);
echo $copy2->post . PHP_EOL;