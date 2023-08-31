<?php
namespace Sectheater\http;
use Request;
use Response;
class Route 

{

public  $request;
public $response;

public function __construct($request, $response){
    $this->request= $request;
    $this->response=$response;
}
public static array $routes=[];

public static function get ($route, $action){
    self:: $routes['get'][$route]=$action;
}

public static function post ($route, $action){
    self:: $routes['post'][$route]=$action;
}
public function resolve(){
$path = $this->request->path();
$method = $this->request->method();
$action= self::$routes[$method][$path] ?? false;


if (!$action){
    return;
}

if (is_callable($action)){
    call_user_func_array( $action,[]);
}

if (is_array($action)){
  
    call_user_func_array([ new $action[0],$action[1]],[]);
}
}
}