<?php
session_start();
if(empty($_SESSION["login"])){
header("LOCATION: ../login.php");
}

require_once "../libs/post.php";

$id = $_GET['id'];

$deleted = DeletePost($id);

if ($deleted) {

header("LOCATION: allposts.php");

}else {
  header("LOCATION: allposts.php");
}

 ?>
