<?php 
include 'conn.php';
session_start();
session_unset();
session_destroy();
setcookie("user1", $u, time() - 60, "/");
header('location:login.php');

 ?>