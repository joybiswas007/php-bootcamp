<?php

class Course {
	public $cid;
	public $lidObj;

	function __construct($cid, $lid) {
		$this->cid = $cid;
		$this->lidObj = new Lesson($lid);
	}
}

class Lesson extends Course {
	public $lid;
	function __construct($lid) {
		$this->lid = $lid;
	}
	function showCourse() {
		echo "Course ID: " . $this->cid . PHP_EOL;
	}
}

$course = new Course(1, 100);
$course->lidObj->showCourse();