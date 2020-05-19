<?php
session_start();
if(empty($_SESSION["login"])){
header("LOCATION: ../login.php");
}

require_once "../libs/user.php";


$user_id = $_GET['id'];

$deleted = DeleteUser($user_id);

if ($deleted) {

header("LOCATION: allusers.php");

}


 ?>
