<?php 
include 'conn.php';
$id=$_GET['id'];
$del=mysqli_query($con,"DELETE FROM customers WHERE cid='$id'");
if ($del) {
	header('location:dcustomers.php');
}
 ?>