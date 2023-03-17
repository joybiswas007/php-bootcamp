<?php
class Posts{
	public $content;

	function __construct($content){
		echo "Hello, from Constructor clss." . PHP_EOL;
		$this->content = $content;
	}

	function getContent(){
		echo $this->content . PHP_EOL;
		return $this;
	}

	function __destruct(){
		echo "Hello, from Destruct class!" . PHP_EOL;
	}
}

$post1 = new Posts("Hello");

$content = $post1->getContent()->content;

echo $content . PHP_EOL;