<?php
 include 'MyNameSpaces.php';
 include 'SubNamespace.php';

 echo "Hostname: " . database\DB_HOST;
 echo "Database Name: " . database\DB_NAME;
 echo "Database User: " . database\DB_USER;
 echo "Password: " . database\DB_PASS;
echo PHP_EOL;
echo "Connection successfull!: " . database\db1\CONNECTION;