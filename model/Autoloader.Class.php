<?php   
    //on charge tous les fichiers à l'extension Class.php
    class Autoloader
    {
        public static function autoload($class)
        {
            require $class.'.Class.php';
        }
        public static function register()
        {
            spl_autoload_register(array(__CLASS__, 'autoload')); 
        }
    }
       
?>