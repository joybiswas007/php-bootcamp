<?php
print('Hello');
echo PHP_EOL;

echo "Current Scriptname: " . $_SERVER['SCRIPT_NAME'] . PHP_EOL;

echo "Current Scriptname: " . $_SERVER['PHP_SELF'] . PHP_EOL;

function checkRoles($roles){
	
	if(empty($roles)){
		echo "Error! roles can't be empty." . PHP_EOL;
		return;
	}
	switch($roles){
		case "sysop":
			echo "Hello, SysOp" . PHP_EOL;
			break;
		case "admin":
			echo "Hello, Admin" . PHP_EOL;
			break;
		case "moderator":
			echo "Hello, Moderator" . PHP_EOL;
			break;
		default:
			echo "Roles can't be empty" . PHP_EOL;
			break;
	}
}

checkRoles('sysop');


echo @$a;

print_r(error_get_last());
