<?php

class EventManager extends Connection
{
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

    public function getList()
    {
        $event = [];
        $req = $this->db->query('SELECT * FROM event ORDER BY dateBegin');
        $rows = $req->fetchAll();
        $req->closeCursor();
        
        foreach ($rows as $row) {
    
        $event[] = new Event($row);
        }
        return $event;
    }

    // function lister()
    //     {
    //     $event=$this->db->query('SELECT * FROM event');
    //     $all=$event->fetchAll();
    //     return $all;
    //     }

    public function detail($id)
        {
            $req=$this->db->prepare('SELECT * FROM event WHERE id= :id');
            $req->execute(array(
                "id"=>$id
            ));
            return $req->fetch();
        }

    public function update(Event $event)
        {
          
            $req=$this->db->prepare('UPDATE event SET name=:name,description=:description,dateBegin=:dateBegin,dateEnd=:dateEnd,
            planner=:planner WHERE id = :id');
            $req->execute(array(
            'id'=>$id,
            'name'=>$name,
            'description'=>$description,
            'dateBegin'=>$dateBegin,
            'dateEnd'=>$dateEnd,
            'planner'=>$planner, 
            ));  

        }
    // public function get($id)
    // {
    //   $q=$this->db->query("SELECT * FROM moto WHERE id=".$id);
    //   $row=$q->fetch();
    //   $q->closeCursor();
    //   $m=new Moto($row);
    //   return $m;
    // }

    public function delete($id)
        {
            $req=$this->db->prepare("DELETE FROM event WHERE id=:id");
            $req->execute(array(
                "id"=>$id
            ));
        }

}

?>