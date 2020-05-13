<?php
class Autoloader
{

       static function charger_class($class)
        {
            spl_autoload_register(array(__ClASS__, 'autoload'));  
        }
        static function register()
        {
        require $class.'.class.php';
        }
     
}      


 ?>