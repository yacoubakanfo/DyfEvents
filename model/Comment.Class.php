<?php
class Comment {
    private $idComment;
    private $idEvent;
    private $comment;
    private $dateComment;
    private $author;

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
        return $this->idComment;
    }
    public function getIdEvent()
    {
        return $this->idEvent;
    }
    public function getComment()
    {
        return $this->comment;
    }
    public function getDateComment()
    {
        return $this->dateComment;
    }
    public function getAuthor()
    {
        return $this->author;
    }
   

    public function setId($idComment)
    {
        $this->idComment = $idComment;
    }
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    public function setDateComment($dateComment)
    {
        $this->dateComment = $dateComment;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    
}

?>