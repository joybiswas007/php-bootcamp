<?php

class Bank {

	private $balance;

	function __construct($balance) {
		$this->balance = $balance;
	}

	function getBalance() {
		return $this->balance;
	}

	function depositAmount($amt) {
		$this->balance = $this->balance + $amt;
	}

	function deductAmount($amt) {
		if ($this->balance <= 0) {
			echo "Insufficient Balance!" . PHP_EOL;
			return;
		}

		if ($this->balance <= $amt) {
			echo "Requested amount is greater than your balance!" . PHP_EOL;
			return;
		}

		$this->balance = $this->balance - $amt;
	}

}

$bank = new Bank(300);

echo "Current Balance: " . $bank->getBalance() . PHP_EOL;

echo "Balance after depositing" . $bank->depositAmount(500) . PHP_EOL;
echo "Current Balance: " . $bank->getBalance() . PHP_EOL;

echo "Processing withdrawls of Amount" . $bank->deductAmount(600) . PHP_EOL;
echo "Current Balance: " . $bank->getBalance() . PHP_EOL;