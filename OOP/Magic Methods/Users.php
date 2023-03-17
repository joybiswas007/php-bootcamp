<?php

class Users{
	private $id;
	public $name = "Array";

	function __set($name, $value) {
		echo "Set Method is called" . PHP_EOL;
		echo $name . PHP_EOL;
		echo $value . PHP_EOL;
		if ($name == "id") {
			$this->id = $name;
		}
	}

		function __get($name) {
			"Get Method is called" . PHP_EOL;
			echo $name . PHP_EOL;
			if ($name == "id") {
					$this->id;
			}
		}

		function __call($name, $arguements) {
			echo $name . PHP_EOL;
			var_dump($arguements) . PHP_EOL;
		}

		function __toString() :string {
			echo "Name: " . $this->name;
			return "To String Method is called" . PHP_EOL;
		}
		function __debuginfo() {
			echo "Taking Control via Debug Info method" . PHP_EOL;
		}
}

$user1 = new Users();
$user1->id = "Test";
echo $user1->id;

$user1->hello("This is a test");
var_dump($user1);
echo $user1;

