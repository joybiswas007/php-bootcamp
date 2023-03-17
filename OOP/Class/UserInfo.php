<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
</head>
<body>
	<?php
	class Users {
		public $accono;
		public $name;
		public $balance = 0;

		function depositAmount($amt) {
			$this->balance = $this->balance + $amt;
		}

		function deductAmout($amt) {
			if ($this->balance <= 0) {
				echo "Insufficent funds!" . PHP_EOL;
				return;
			}

			if ($this->balance <= $amt) {
				echo "requested balance is greater than your balance!" . PHP_EOL;
				return;
			}
			$this->balance = $this->balance - $amt;
		}

		function checkBalance() {
			echo "Current balance: $this->balance" . PHP_EOL;
		}
	}
	$bank1 = new Users();
	?>
	<fieldset>
		<legend>User Information: </legend>
		<table>
			<tr>
			<th>Account Number</th>
			<th>Username</th>
			<th>Balance in USD</th>
		</tr>
		<tr>
			<td><?= $bank1->accno = 101; ?></td>
			<td><?= $bank1->name = "John, Smith"; ?></td>
			<td> <?= $bank1->balance = 500; ?></td>
		</tr>
		</table>
	</fieldset>

	<?php
	$bank1->checkBalance();

	$bank1->depositAmount(100);
	$bank1->checkBalance();

	$bank1->deductAmout(1000);
	$bank1->checkBalance();

	?>
</body>
</html>