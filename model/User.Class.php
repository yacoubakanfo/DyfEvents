<?php
class User {
    private $idUser;
    private $username;
    private $password;

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
        return $this->idUser;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setId($idUser)
    {
        $this->idUser = $idUser;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

}

?>