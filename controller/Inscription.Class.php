<?php

//        $req=$conn->prepare("SELECT idUser from user where username=? limit 1");
//        $req->execute(array($username));
//        $tab=$req->fetchAll();
//        if(count($tab)>0)
//           $erreur="Username existe déjà!";
//        else{
//         $manager->createAccount($user);
        //   $req=$conn->prepare("INSERT into user(username, password) values(?,?,?,?)");
        //   if($req->execute(array($username,md5($password))));

// require_once '../model/Autoloader.Class.php';
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
           if($password==$repassword)
           {
              Autoloader::register();   
              $manager = new UserManager();
              $user = new User($_POST);
              $manager->createAccount($user);

              header("location:../controller/Login.php");
             // exit;
            
           }else echo '<font color="red"><center><em><h3>Les deux mots de passe doivent etre identiques!</em><br><br><b>Reessayez svp</b></h3></center></font>';
       }else echo('<script> alert("Veuillez saisir tous les champs")</script>');
       require_once 'view/inscriptionView.php';
      } 
    }
}
    
    //   return $inscription;
    //  }
    // }
    // require_once 'view/inscriptionView.php';

//      public function creatAccount(User $user){
//          $user = new User($_POST);
//          $this->manager->createAccount($username, $password);
//          echo $_POST['username'];
//  }




//   if(isset($_POST['submit'])){

//          $username = $_POST['username'];
//          $password = $_POST['password'];
//          $repassword = $_POST['repassword'];

//       if($username&&$password&&$repassword) 
//       {
//           if($password==$repassword)
//           {
//              Autoloader::register();   
//              $manager = new UserManager();
//              $user = new User($_POST);
//              $manager->createAccount($user);

    //          echo "<div class='sucess'>
    //          <h3>Vous êtes inscrit avec succès.</h3>
    //          <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
    //    </div>";

            //  header("location:../controller/Inscription.php");
            // exit;
            
//           }else echo('<script> alert("Les deux mots de passe doivent etre identiques")</script>');
//       }else echo "Veuillez saisir tous les champs";
//      }

// require_once 'view/inscriptionView.php';

?>