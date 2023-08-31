<?php

namespace app\models;
use Sectheater\DB\DB;
class Product extends DB
{
    private $table='customer';
     private $conn;


    public function __construct()
    {
    
     $this->conn= $this->connect();

    }
    public function getAllCustomer(){
    
         
       return $this->conn->get($this->table);
    }

}