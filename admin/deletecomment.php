<?php
session_start();
if(empty($_SESSION["login"])){
header("LOCATION: ../login.php");
}

require_once "../libs/comment.php";

$id = $_GET['id'];

$deleted = Deletecomment($id);

if ($deleted) {

header("LOCATION: allposts.php");

}else {
  header("LOCATION: allposts.php");
}

 ?>
