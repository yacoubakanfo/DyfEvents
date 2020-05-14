<?php
require_once '../model/connection.class.php';
class Eventmanager extends Connection
{

public function insert(Event $event){
    $req=$this->db->prepare("INSERT INTO event(name,dateBegin,dateEnd,planner,description) VALUES(:name,:dateBegin,:dateEnd,:planner,:description)");
    $req->execute(array(

        'name'=>$_POST['name'],
        'dateBegin'=>$_POST['dateBegin'],
        'dateEnd'=>$_POST['dateEnd'],
        'planner'=>$_POST['planner'],
        'description'=>$_POST['description']
    ));
}
}

?>