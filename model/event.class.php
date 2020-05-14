<?php
class Event {
    private $idEvent;
    private $name;
    private $description;
    private $dateBegin;
    private $dateEnd;
    private $planner;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
  
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value){
            $method='set'.ucfirst($key);
            if((method_exists($this,$method))){
            $this->$method($value);
        }
    }
    }

    public function getId()
    {
        return $this->idEvent;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getDateBegin()
    {
        return $this->dateBegin;
    }
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
    public function getPlanner()
    {
        return $this->planner;
    }

    public function setId($idEvent)
    {
        $this->idEvent = $idEvent;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;
    }
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }
    public function setPlanner($planner)
    {
        $this->planner = $planner;
    }

}

?>