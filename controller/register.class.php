<?php

class Register{

    private $manager;

    function __construct(){

        $this->manager=new EventManager();
    }

    function register(){
        if (isset($_POST['name']) and $_POST['description'] and $_POST['dateBegin'] and $_POST['dateEnd'] and $_POST['planner'])
        {
            Autoloader::register();   
            $manager = new EventManager();
            $event = new Event($_POST);
            $manager->add($event);
    
            header("location:index.php?action=enregistrer");
        }
        require_once 'view/registerView.php';
    }
}

?>
