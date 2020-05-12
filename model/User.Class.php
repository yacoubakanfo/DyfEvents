<?php
    // session_start();
    class User extends Connection
    {
        public $username;//$_POST['username'];
        public $password;//$_POST['username'];
        public function __construct(array $user)
        {
            // parent::__construct();
            $this->hydrate($user);
        } 
        public function hydrate(array $post)
        {
            foreach ($post as $key => $value)
            {
                $method='set'.ucfirst($key);
                if(method_exists($this,$method))
                {
                $this->$method($value);
                }
            }
        }
        public function getUsername()
        {
            return $this->username;
        }
        public function getPassword()
        {
            return $this->password;
        }
    }


        
    
?>