<?php 
class DetailComments{

    private $eManager;
    private $cManager;

    function __construct(){

        $this->eManager=new EventManager();
        $this->cManager=new CommentManager();
    }

    function detailComments(){

        if(isset($_GET['id'])){
            $eManager=$this->eManager->detail($_GET['id']);
            $cManager=$this->cManager->getComments($eManager['id']);
            if(isset($_POST['Comment']) AND isset($_POST['dateComment']) AND isset($_POST['author'])) {
                $this->cManager->postComment($_GET['id'],$_POST['comment'],NOW(),$_POST['author']);
            }
        }
        require_once 'view/detail_commentView.php';
    }
}

?>