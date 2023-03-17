<?php
require_once'config/config.php';

class Database {
  private $host = DB_HOST;
  private $dbname = DB_NAME;
  private $user = DB_USER;
  private $pwd = DB_PWD;
  
  private $connection;
  private $error;
  private $stmt;
  private $dbconnection = false;
  
  function __construct() {
    
  }
  
  function getError() {
    return $this->error;
  }
  
  function isConnected() {
    return $this->dbconnection;
  }
}