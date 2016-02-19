<?php
include_once("dataBase.php");

// Define configuration
define("DB_HOST", "ec2-54-225-199-245.compute-1.amazonaws.com");
define("DB_USER", "xghiwvoawqouzq");
define("DB_PASS", "xo0DubsWtiMabLhMm8-GkF-Dof");
define("DB_NAME", "d16lc3dji7qp0a");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
