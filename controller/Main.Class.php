<?php
// require_once 'Inscription.Class.php';
// require_once 'ListEvent.Class.php';
// require_once 'Admin.Class.php';
// require_once 'Login.Class.php';
// require_once 'Register.Class.php';
// require_once 'Logout.Class.php';
// require_once 'Delete.Class.php';
// require_once 'Erreur.Class.php';
// require_once 'Home.Class.php';
// require_once 'DetailComments.Class.php';
require_once 'model/Autoloader.Class.php';
 
class Main {
 
//    Déclaration des variables associées au différents controleurs
    private $ctrlAdmin;
    private $ctrlInscription;
    private $ctrlLogin;
    private $ctrlRegister;
    private $ctrlList;
    private $ctrlLogout;
    private $ctrlDelete;
    private $ctrlErreur;
    private $ctrlHome;
    private $ctrlDetailComments;
 
// Déclaration des méthodes créées dans chaque controleur
    function __construct() {
        $this->ctrlAdmin = new Admin();
        $this->ctrlInscription = new Inscription();
        $this->ctrlLogin = new Login();
        $this->ctrlRegister = new Register();
        $this->ctrlList = new ListEvent();
        $this->ctrlLogout = new Logout();
        $this->ctrlDelete = new Delete();
        $this->ctrlErreur = new Erreur();
        $this->ctrlHome = new Home();
        $this->ctrlDetailComments = new DetailComments();
    }
 
// Traite une requête entrante -> Redirection automatique vers chacun des controleurs selon sélection
    public function mainRequest() {
        try {
            if(isset($_GET['action'])) {
                // $action = $_GET['action'];
                switch ($_GET['action']) {

                    case 'admin' :
                    $this->ctrlAdmin->index();
                    break;

                    case 'inscription' :
                    $this->ctrlInscription->signIn();
                    break;
                    // case 'billet' :
                    //     $id = $_GET['id'];
                    //     $this->ctrlBillet->billetunique();
                    //     break;
                    case 'login' :
                        $this->ctrlLogin->login();
                        break;

                    case 'enregistrer' :
                        $this->ctrlRegister->register();
                        break;

                    case 'lister' :
                        $this->ctrlList->list();
                        break;
    
                    case 'modifier' :
                        $this->ctrlUpdate->update();
                        break;

                    case 'supprimer' :
                        $this->ctrlDelete->delete();
                        break;

                    case 'deconnecter' :
                        $this->ctrlLogout->logout();
                        break;

                    case 'detail' :
                        $this->ctrlDetailComments->detailComments();
                        break;

                    // case 'commenter' :
                    //     $this->ctrlComment->comment();
                    //     break;



                    default:
                    $this->ctrlErreur->error();
                    break;
                    // case 'editeur' :
                    //     $this->ctrlEditeur->editeur();
                    //     break;
                    // case 'administration':
                    //     $this->ctrlAdministration->administration();
                    //     break;
                    // case 'addComment':
                    //     $params = $_POST['params'];
                    //     $controlleur = $this->ctrlBillet;
                    //     $controlleur->addComment($params);
                    //     break;
                    // case 'connectAdmin' :
                    //     $pseudo = $_POST['pseudo'];
                    //     $password = $_POST['password'];
                    //     $controlleur = $this->ctrlAdministration;
                    //     $controlleur->connectAdmin($pseudo, $password);
 
 
                }
            }
            else {
                $this->ctrlHome->index();  // action par défaut
            }

        // catch(Exception $e) {
        //     $errorMessage = $e->getMessage();
        //     require('view/errorView.php');

        }
        catch (Exception $e) {
            $this->ctrlErreur->error();
        }
    }

}
?>