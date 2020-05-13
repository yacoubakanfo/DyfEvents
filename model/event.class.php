<?php

class Event
{
    private $idEvent;
    private $name;
    private $dateBegin;
    private $dateEnd;
    private $planner;
    private $description;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
     foreach ($data as $key => $value) 
        {
           $methode = 'set'.ucfirst($key);
            if (method_exists($this,$methode)) 
            {
                $this->$methode($value); 
            }  
        }               
    }

    public function setId($id)
    {
        $id = (int)$id;
        if ($id>0) {
            $this->id;
        }
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->name;
        
        }
    }

    public function setDateBegin($dateBegin)
    {
        if (is_string($dateBegin)) {
            $this->dateBegin;
        }
    }

    public function setDateEnd($dateEnd)
    {
        if (is_string($dateEnd)) {
            $this->dateEnd;
        }
    }

    public function setPlanner($planner)
    {
        if (is_string($planner)) {
            $this->planner;
        }
    }

    public function setDescription($description)
    {
        if (is_string($description)) {
            $this->description;
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

    public function getDescription()
    {
        return $this->description;
    }
}