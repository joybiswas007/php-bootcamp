<?php
class Bank {
	public $accno;
	public $name;
	public $balance = 0;

	function depositAmount($amt){
		$this->balance = $this->balance + $amt;
	}

	function deductAmount($amt){
		if($this->balance <= 0) {
			echo "Insufficient funds!" . PHP_EOL;
			return;
		}

		if ($this->balance <= $amt) {
			echo "Request amount is greater than balance!" . PHP_EOL;
			return;
		}
		$this->balance = $this->balance - $amt;
	}

	function checkBalance() {
		echo "Balance is : $this->balance" . PHP_EOL;

	}
}

$bank1 = new Bank();

$bank1->id = 101;
$bank1->name = "John, Smith";
$bank1->balance = 500;

$bank1->checkBalance();

$bank1->depositAmount(1000);
$bank1->checkBalance();

$bank1->deductAmount(2000);
$bank1->checkBalance();

