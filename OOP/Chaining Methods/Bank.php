<?php
class Bank {
	public $accno;
	public $name;
	public $balance = 0;

	function __construct($accno, $name) {
		$this->accno = $accno;
		$this->name = $name;
	}

	function depositAmount($amt) {
		$this->balance = $this->balance + $amt;
		return $this;
	}

	function deductAmount($amt) {
		if ($this->balance <= 0) {
			echo "Insifficient funds!" . PHP_EOL;
		}

		if ($this->balance <= $amt) {
			echo "Requested amount is greater than your current balance" . PHP_EOL;
		}

		$this->balance = $this->balance - $amt;
		return $this;
	}

	function checkBalance() {
		echo "Balance: " . $this->balance . PHP_EOL;
		return $this;
	}
}

$bank = new Bank(101, "Peter Griffin");
$bank->depositAmount(1000)->checkBalance();
$bank->deductAmount(500)->checkBalance();
echo $bank->depositAmount(1000)->checkBalance()->balance . PHP_EOL;