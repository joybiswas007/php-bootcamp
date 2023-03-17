<?php

class Post {
	public $post;

	function __construct($post) {
		$this->post = $post;
	}
}

//Identify - ===

function identityCompare(&$Obj1, &$Obj2) {
	if ($Obj1 === $Obj2) {
		return true;
	} else {
		return false;
	}
}

//Compare - ==

function compareOperator(&$Obj1, &$Obj2) {
	if ($Obj1 == $Obj2) {
		return true;
	} else {
		return false;
	}
}

$post1 = new Post("Test post");
$post2 = new Post("Test post");
$post3 = clone $post1;
$post4 = $post2;


echo identityCompare($post1, $post2) ? "Same" : "Different";
echo PHP_EOL;

echo identityCompare($post1, $post3) ? "Same" : "Different";
echo PHP_EOL;

echo identityCompare($post2, $post3) ? "Same" : "Different";
echo PHP_EOL;

echo identityCompare($post1, $post4) ? "Same" : "Different";
echo PHP_EOL;

echo compareOperator($post1, $post2) ? "Same" : "Different";
echo PHP_EOL;

echo compareOperator($post1, $post3) ? "Same" : "Different";
echo PHP_EOL;

echo compareOperator($post2, $post3) ? "Same" : "Different";
echo PHP_EOL;

echo compareOperator($post1, $post4) ? "Same" : "Different";
echo PHP_EOL;

