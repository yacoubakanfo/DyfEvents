<?php

 class Logout{

    private $manager;

    public function __construct(){
        $this->manager = new UserManager();
    }

    public function logout(){
        session_start();
        session_destroy();

        header ('Location:index.php?action=login');
        exit();
    }
}
?>