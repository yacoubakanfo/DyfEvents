<?php

 class Login{

    private $manager;

    public function __construct(){
        $this->manager = new UserManager();
    }

    public function login(){
        if(isset($_POST["username"]) AND isset($_POST["password"])){

            $username = $_POST['username'];
            $password = $_POST['password'];
        
            if($username&&$password) {

                Autoloader::register();
                $manager=new UserManager();
                $user = new User($_POST);
                $check=$manager->auth($user);
                if($check!=false){
        
            session_start();
            
                $_SESSION["nom"]=$check["username"];

                header("location:index.php?action=admin");
                
            } else echo '<font color="red"><center><em><h3>L\'identification a échoué:Mauvais login / mot de passe. <b>Merci de recommencer</b></h3></center></font>';
        
         } else echo 'Veuillez remplir tous les champs!';
        
        }
        require_once 'view/loginView.php';
    }
}

?>