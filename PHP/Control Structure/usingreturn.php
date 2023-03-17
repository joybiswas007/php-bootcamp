<?php
function checkUSerRoles($userRoles) {
	if(empty($userRoles)){
		echo "Error!" . PHP_EOL;
		return;
	}


	switch ($userRoles) {
		case "Admin":
			echo "Hello Admin!" . PHP_EOL;
			break;
			case "Developer":
			echo "Hello Developer!" . PHP_EOL;
			break;
		
		default:
			echo "Roles can't be empty" . PHP_EOL;
			break;
	}
}

checkUSerRoles("");