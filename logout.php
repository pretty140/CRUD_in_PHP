<?php
$conn=mysqli_connect('localhost','root','','viva');
session_start();
session_destroy();
header("location:login.php");
exit;

?>