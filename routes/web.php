<?php
use app\controllers\ProductController;
use app\controllers\HomeControllers;
use Sectheater\http\Route;
use Sectheater\DB;


Route::get('/',[ProductController::class,'index']);
