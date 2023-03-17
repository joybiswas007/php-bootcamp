<?php
class Users{
	function fetchUser($id) : bool {
		$result = false;
		
		echo "Query Database for ID: " . $id . PHP_EOL;
		$result = true;
		echo "Query Complete" . PHP_EOL;
		
		return $result;

	}

	function deleteUser($id) {
		echo "Deleting the User from Database ID: " . $id . PHP_EOL;
	}
}

$users = new Users();

$users->fetchUser(101);
$users->fetchUser(102);
$users->fetchUser(103);
$users->deleteUser(101);
$users->deleteUser(102);