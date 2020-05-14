<?php

class Inscription{

    private $manager;

    public function __construct(){
        $this->manager = new UserManager();
    }

    public function signIn(){

     if(isset($_POST['submit'])){

          $username = $_POST['username'];
          $password = $_POST['password'];
          $repassword = $_POST['repassword'];

       if($username&&$password&&$repassword) 
       {
        Autoloader::register();   
        $manager = new UserManager();
        $user = new User($_POST);
        // $check = $manager->verifUsername($user);
        //    if($check!=false){
        //         echo '<font color="red"><center><em><h3>Ce nom d\'utilisateur existe déjà!</em><br><br><b>Utilisez un autre svp</b></h3></center></font>';
        //    } else{
            if($password==$repassword) {

              $manager->createAccount($user);

              header("location:index.php?action=login");
             // exit;
            
           }else echo '<font color="red"><center><em><h3>Les deux mots de passe doivent etre identiques!</em><br><br><b>Reessayez svp</b></h3></center></font>';
        }
       }else echo('<script> alert("Veuillez saisir tous les champs")</script>');
       
    //   } 
      require_once 'view/inscriptionView.php';
    }
    
}

?>