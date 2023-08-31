<?php
namespace app\controllers;
use Sectheater\view\view;

class HomeControllers{
    public function index(){
        $data['title']='home page';
        $data['content']='content of home page';
     view::load('home',$data);
    }
}