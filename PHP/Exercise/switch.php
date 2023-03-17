<?php
function checkUserPermission($userRoles){
		if (empty($userRoles)){
			echo "Error!" . PHP_EOL;
			return;
		}

		switch ($userRoles) {
		case "Admin":
		echo "Welcome, Admin!" . PHP_EOL;
		break;
		case "Developer":
		echo "Welcome, Developer" . PHP_EOL;
		break;
		default:
		echo "Roles can't be empty!" . PHP_EOL;
	}
}

checkUserPermission("");