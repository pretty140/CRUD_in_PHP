<?php 
include 'conn.php';
$id=$_GET['id'];
$del=mysqli_query($con,"DELETE FROM payments WHERE pid='$id'");
if ($del) {
	header('location:dpayment.php');
}
 ?>