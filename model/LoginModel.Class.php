<?php    
    class LoginModel extends Connection
    {
        public function authentification(User $user)       
        {
            $result=$this->connexion->prepare('SELECT * FROM user WHERE username=:username AND password=:password');
            $result->execute(array(
            'username' => $_POST['username'],
            'password' => md5($_POST['password'])));
            $tab=$result->fetchAll();
            if(count($tab)==0)
            {
                return false;
            }
            else 
            {   
                return $tab;
            }
        }        
    }
    // $result->setFetchMode(PDO::FETCH_ASSOC);
            // $result->bindValue(':username', $result->getUsername());
            // $result->bindValue(':password', $result->md5(getPassword()));
?>