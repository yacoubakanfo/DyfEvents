<?php
    class Connection
    {
    protected $db;

    function __construct(){
        try{
            $this->db = new PDO('mysql:host=localhost;dbname=events', 'root', '');
        }
        catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
    }
    
    function getDb() 
        {
         return $this->db;
        }
    
}
?>