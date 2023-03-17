<?php

interface Phone{
	public function makeCall($number);
	public function sendMessage($number, $message);
}

class Android implements Phone{
	function makeCall($number) {
		echo "Making call to " . $number . PHP_EOL;
	}

	function sendMessage($number, $message) {
		echo "Sending $message to $number" . PHP_EOL;
	}
}

$android1 = new Android();
$android1->makeCall(123456789);
$android1->sendMessage(123456789, "Finished Learning Interface");