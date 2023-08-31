<?php
 
 namespace Sectheater\view;
 
 class view
 
 {
    public static function load ($view_name,$view_data)
    {
      $file='src/view/'.$view_name.'.php';
      if (file_exists($file))
      {
        extract($view_data);
        ob_start();
        require($file);
        ob_end_flush();
      }
      else
      {
         echo "this view:".$view_name."does not exist";

      }
    }
 }