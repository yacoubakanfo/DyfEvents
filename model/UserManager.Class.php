<?php
require_once 'model/Connection.Class.php';
class UserManager extends Connection
{

    
    public function createAccount(User $user){

        $req = $this->db->prepare('INSERT INTO user(username, password) VALUES(:username,:password)');
        $req->execute(array(
        'username' => $_POST['username'],
        'password' => md5($_POST['password'])));
    }

    public function verifUsername(User $username){
        $req = $this->db->prepare("SELECT idUser from user where username=:username limit 1");
        $req->execute(array(
        'username' => $_POST['username']));
        $tab = $req->fetchAll();
        if(count($tab)>0){
           return true;
        }
        else{
            return false;
        }
    }

    public function auth(User $user)
        {

            // on recupère le password de la table qui correspond au login du visiteur

            $req = $this->db->prepare('SELECT * FROM user WHERE username=:username AND password=:password');
            $req->execute(array(
                'username' => $_POST['username'],
                'password' => md5($_POST['password'])));
                $row=$req->fetchAll();
                if(count($row)!=0){
                    return $row;
                }
                else{ 
                    return false;
                }

        }

}

?>