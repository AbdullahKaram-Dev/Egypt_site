<?php


function AddNewPost($title,$artical,$imgname,$user_id){

  $con = mysqli_connect("localhost" , "root" , "Abdo1234" , "Blog");

  $query = "INSERT INTO `post`(`title`,`artical`,`img`,`user_id`) VALUES ('$title','$artical','$imgname','$user_id')";
  $q = mysqli_query($con , $query );
  // print_r($query);
  //     echo "<pre>";
  $affected = mysqli_affected_rows($con);
  if ($affected > 0) {
    return true;
  }
  }




function ShowAllPost($extra = ''){

  $con = mysqli_connect("localhost" , "root" , "Abdo1234" , "Blog");

$query = "SELECT * FROM `post` $extra";
$q = mysqli_query($con , $query );


      $posts = [];

      while($post= mysqli_fetch_assoc($q)){
          $posts[] = $post;
      }


      return $posts;


}


function UpdatePost($id,$title,$artical,$imgname){

  $con = mysqli_connect("localhost" , "root" , "Abdo1234" , "Blog");

  $query ="UPDATE `post` SET `title`='$title',`artical`='$artical', `img` ='$imgname' WHERE `id` = $id";
  $q = mysqli_query($con,$query);
  Print_r($query);
  echo "<pre>";

  $affected = mysqli_affected_rows($con);

  if($affected>0){
      return true;
  }

}

function DeletePost($id){

  $con = mysqli_connect("localhost" , "root" , "Abdo1234" , "Blog");

  $query = "DELETE FROM `post` WHERE  `id` = $id";
  $q = mysqli_query($con,$query);
  $affected = mysqli_affected_rows($con);

  if($affected>0){
      return true;
  }


}

 ?>
