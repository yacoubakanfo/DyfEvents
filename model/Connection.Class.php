<?php

class Connection
{
    protected $connexion;
    public  function __construct()
    {    
        try
        {
            $this->connexion = new PDO('mysql:host=localhost;dbname=events', 'root','');
        }
        catch(Exception $e)
        {
            die('Erreur'.$e->getMessage());
        }
    }
    public function getConnexion()
     {
         return $this->connexion;
     }
}
// ********************POO*******************
    // abstract class Connection
    // {
    //     public static $db;
    //     public static function getDb()
    //     {
    //         try{
    //             Connection::$db = new PDO ('mysql:host=localhost; dbname=event','root','');
    //             return Connection::$db;
    //         }
    //         catch(Exception $e){
    //             die('Erreur'.$e->getMessage());
    //         }
            
    //     }
        
    // }
    // ****************POO******************
    
    
?>