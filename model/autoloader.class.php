<?php

class Autoloader{

    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class)
    {

        if(file_exists('controller/'.$class.'.Class.php')){
            require 'controller/'.$class.'.Class.php';
        }
    
        if(file_exists('model/'.$class.'.Class.php')){
            require $class.'.Class.php';
        }
    } 
}   

?>