<?php


function ShowCommentByPost($post_id){
    $con = mysqli_connect("localhost","root","Abdo1234","blog");

    $query = "SELECT * FROM `comment` WHERE  `post_id` = $post_id";
    $q = mysqli_query($con,$query);

    $comments= [];

    while($comment = mysqli_fetch_assoc($q)){
        $comments[] = $comment;
    }

    return $comments;
}



function AddNewComment($name,$comment,$post_id,$time){
    $con = mysqli_connect("localhost","root","Abdo1234","blog");

    $query = "INSERT INTO `comment` ( `name`, `comment`, `post_id`,`created_at`) VALUES ('$name','$comment','$post_id',$time)";

    $q = mysqli_query($con,$query);

    $affected = mysqli_affected_rows($con);

    if($affected>0){
        return true;
    }

}


function ShowAllComment($extra = ''){

  $con = mysqli_connect("localhost","root","Abdo1234","blog");
  $query = "SELECT * FROM `comment` $extra" ;
  $q = mysqli_query($con,$query);
  $comments = [];
  while($comment= mysqli_fetch_assoc($q)){
     $comments[] = $comment;

  }



}


function UpdateComment(){

}

function DeleteComment($id){

  $con = mysqli_connect("localhost" , "root" , "Abdo1234" , "Blog");

  $query = "DELETE FROM `comment` WHERE  `id` = $id";
  $q = mysqli_query($con,$query);
  $affected = mysqli_affected_rows($con);

  if($affected>0){
      return true;
  }
}

 ?>
