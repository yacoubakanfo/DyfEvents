<?php

class CommentManager extends Connection
{

    function getComments($id){
        $req= $this->db->prepare('SELECT * FROM comment WHERE idEvent=:id');
        $req->execute(array("id"=>$id));
        $comments=$req->fetchAll();
        return $comments;
    }

    function postComment($id, $comment, $author)
    {
        $req= $this->db->prepare('INSERT INTO comment (idEvent,comment,dateComment,author) VALUES(:idEvent, :comment, :dateComment, :author)');
        $req->execute(array(
            'idEvent'=>$id,
            'comment'=>$comment,
            'dateComment'=>NOW(),
            'author'=>$author
            ));
    }

}