<?php

class Iterate {
	public $post;
	public $hasPost = true;

	function __construct($post) {
		$this->post = $post;
	}

	function hello() {
		echo "hello" . PHP_EOL;
	}
}

$ite = new Iterate("This is a post");

foreach($ite as $key => $value) {
	echo $key . ' => ' . $value . PHP_EOL;
}

var_dump($ite);
print_r($ite);