<?php
    require 'model/Autoloader.Class.php';
    Autoloader::register();
    $main = new Main();
    $main->mainRequest(); 
?>
