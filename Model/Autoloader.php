<?php

namespace Club_Fromage\Model;
class Autoloader
{
   static function register(){
       spl_autoload_register(array(__CLASS__,'autoload'));
   }

   static function autoload($class_name){

       $file = str_replace('\\', '/', $class_name);
       $file = '.' . $file . '.php';
       if(file_exists($file))
           return require $file;
       
   }

}