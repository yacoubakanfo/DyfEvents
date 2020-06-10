<?php
require_once 'model/Connection.Class.php';
class UserManager extends Connection
{
    public function auth(User $user)
    {
        // on recupère le password de la table qui correspond au login du visiteur
        $req = $this->db->prepare('SELECT * FROM user WHERE username=:username AND password=:password');
        $req->execute(array(
        'username' => $_POST['username'],
        'password' => md5($_POST['password'])));
        $row=$req->fetchAll();
        if(count($row)!=0){
            return $row;
        }
        else{ 
            return false;
        }
    }
    public function add(Event $event)
    {

        $req = $this->db->prepare('INSERT INTO event SET name =:name, description =:description, dateBegin =:dateBegin, dateEnd =:dateEnd, planner =:planner');
        $req->bindValue(':name', $event->getName());
        $req->bindValue(':description', $event->getDescription());
        $req->bindValue(':dateBegin', $event->getDateBegin());
        $req->bindValue(':dateEnd', $event->getDateEnd());
        $req->bindValue(':planner', $event->getPlanner()); 

        $req->execute();
    }
}

?>