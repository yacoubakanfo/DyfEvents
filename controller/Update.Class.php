<?php
require_once '../model/Autoloader.Class.php';

if(isset($_GET['id']))
{  
    Autoloader::register(); 
    $manager = new EventManager();

    $id=$_GET['id'];
    $event=$manager->get($_GET['id']);

$name='value="'.$event->getName().'"';
$description='value="'.$event->getDescription().'"';
$dateBegin='value="'.$event->getDateBegin().'"';
$dateEnd='value="'.$event->getDateEnd().'"';
$planner='value="'.$event->getPlanner().'"';

}
  
if(isset($_POST["name"]) AND isset($_POST["description"]) AND isset($_POST["dateBegin"]) AND isset($_POST["dateEnd"]) AND isset($_POST["planner"]))
  {
    Autoloader::register();   
    $manager = new EventManager();
    $event = new Event($_POST);
    $manager->update($event);

    header("location:../controller/ListEvent.php");
  }
  require_once '../view/updateView.php';
  ?>
