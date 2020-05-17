<?php 
// require_once '../model/Autoloader.Class.php';


// Autoloader::register();     
// $manager = new EventManager();

// $list = $manager->getList();

// require_once '../view/listView.php';

class ListEvent{

    private $manager;

    function __construct(){
        // $base=new Connection();
        // $db=$base->getDb();
        $this->manager=new EventManager();
    }

    function list(){

        if (isset($_GET['del'])) {
            $this->manager->delete($_GET['del']);
        }

        $manager=$this->manager->getList();
        
        require_once 'view/listView.php';
    }    
}

?>