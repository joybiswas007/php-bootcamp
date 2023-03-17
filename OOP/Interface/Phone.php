<?php

interface Phone{
	public function makeCall($number);
	public function sendMessage($number, $message);
}

class Android implements Phone{
	private $number;
	private $message;

	function getNumber() : int {
		return $this->number;
	}

	function setNumber($number) {
		$this->number = $number;
	}

	function getMessage() : string {
		return $this->message;
	}

	function setMessage($message) {
		$this->message = $message;
	}

	function makeCall($number) {
		echo "Making call to " . $this->getNumber() . PHP_EOL;
	}

	function sendMessage($number, $message) {
		echo "Sending " . $this->getMessage() . " to " . $this->getNumber() . PHP_EOL;
	}
}

$android = new Android();

$android->setNumber(123456789);
$android->setMessage("Hakuna Bata");

$android->makeCall(123456789);
$android->sendMessage(123456789, "Hakuna Bata");