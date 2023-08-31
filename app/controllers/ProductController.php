<?php

namespace app\controllers;
use app\models\Product;
use Sectheater\DB\DB;
class ProductController{

    public function index(){
       $TA = new DB(); 
        $TA->connect();
        $mode=new Product();
       // $mode->getAllCustomer();
       $data['customer']= $mode->getAllCustomer();
       view::load('product/index',$data);
    }
   

}




?>