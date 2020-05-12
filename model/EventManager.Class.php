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

    public function get($id){
        $req=$this->db->prepare("SELECT * FROM event WHERE id=".$id);
        // $req->execute(array(
        //     "id"=>$idEvent
        // ));
        $row=$req->fetch();
        $req->closeCursor();
        $event=new Event($row);
        return $event; 
    }

    public function update(Event $event)
    {
         try{ 
                $req=$this->db->prepare('UPDATE event SET name=:name,description=:description,dateBegin=:dateBegin,dateEnd=:dateEnd,
                planner=:planner WHERE name=:name');
                $req->execute(array(
                'name'=>$event->getName(),
                'description'=>$event->getDescription(),
                'dateBegin'=>$event->getDateBegin(),
                'dateEnd'=>$event->getDateEnd(),
                'planner'=>$event->getPlanner(), 
              ));  
         } catch (Exception $ex) {
             echo $ex->getMessage();
         }
    }
    // public function get($id)
    // {
    //   $q=$this->db->query("SELECT * FROM moto WHERE id=".$id);
    //   $row=$q->fetch();
    //   $q->closeCursor();
    //   $m=new Moto($row);
    //   return $m;
    // }

    public function delete($name)
        {
            $req=$this->db->prepare("DELETE * FROM event WHERE name=:name");
            $req->execute(array(
                "name"=>$name
            ));
        }

}

?>