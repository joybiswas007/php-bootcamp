<?php

try {
throw new Exception("Error Processing Request", 1);
 
} catch (Exception $e) {
	echo $e->getMessage();
} finally {
	echo "Finally block is used for cleanup exit.";
}