<?php 
class Home{

    private $manager;

    function __construct(){

        $this->manager=new EventManager();
    }

    function index(){

        $manager=$this->manager->getList();
        
        require_once 'view/homeView.php';
    }
}

?>