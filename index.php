<?php

use Sectheater\http\Request;
use Sectheater\http\Response;
use Sectheater\http\Route;
require 'vendor/autoload.php';
require 'routes/web.php'; 




$route= new Route( new Request, new Response);

$route->resolve();
//dump($route->request->method());
?>
