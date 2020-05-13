<?php
require_once   '../modeles/autoloader.class.php';


      if(isset($_POST['name'])
       and $_POST['dateBegin']
        and $_POST["dateEnd"]
        and $_POST['planner']and
           $_POST['description'])
     {
     
     
        $manager=new Eventmanager($connection);
        $event=new Event ($_POST);
           $manager->insert($event);
     
       header('location:../controleurs/register.php');
    
     
      require_once('../vues/enregistrer.php');  
    } 
    ?>
