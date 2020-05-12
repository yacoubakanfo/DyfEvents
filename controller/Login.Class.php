<?php
    require_once '../model/Autoloader.Class.php';
    if(isset($_POST['username']) and $_POST['password'])        
    {
        Autoloader::register();
        $user = new User($_POST);
        $log = new LoginModel();
        $verify=$log->authentification($user);       
       if($verify==false)
       {
           echo 'Echec de l\'authentification';
       }
       else
       {
           session_start();
           header('location:Admin.Class.php');
       }
    }    
        require_once '../view/LoginView.php';
?>
