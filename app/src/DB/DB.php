<?php 
namespace Sectheater\DB; 
require "config/config.php";
use Sectheater\Database\MysqliDb;
class DB {
    protected $db;
    public function connect(){
      $database = new MysqliDb(HOST,USER,PASS,DANAME);
    if ($database){
       $this->db=$database;
       return $this->db;
    }
    else { echo "error";}
    }
}




?>