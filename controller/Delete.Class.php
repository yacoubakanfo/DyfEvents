<?php
// require_once '../model/Autoloader.Class.php';


// if(isset($_GET["name"])){

// $manager->delete($_GET["name"]);

// header("location:../controller/ListEvent.php");
// }
// require_once '../view/listView.php';

class Delete{

    private $manager;

    function __construct(){
        // $base=new Connection();
        // $db=$base->getDb();
        $this->manager=new EventManager();
    }

    function delete(){

        if(isset($_GET["supprimer"])){

        $manager->delete($_GET["supprimer"]);

        header("location:index.php?action=lister");
        }
    }
}
?>