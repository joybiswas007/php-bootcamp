<?php

print_r($_SERVER);


//print_r($_REQUEST);

//$_SERVER — Server and execution environment information
var_dump($_GET); //— HTTP GET variables
var_dump($_POST); // — HTTP POST variables
var_dump($_FILES); //— HTTP File Upload variables
//$_REQUEST — HTTP Request variables
var_dump($_SESSION); // — Session variables
var_dump($_ENV); //— Environment variables
var_dump($_COOKIE); //— HTTP Cookies
var_dump($php_errormsg); //— The previous error message
var_dump($http_response_header); // — HTTP response headers
var_dump($argc);
var_dump($argv); 
