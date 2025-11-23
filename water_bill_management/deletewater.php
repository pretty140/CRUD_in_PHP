<?php 

include 'conn.php';
$id=$_GET['id'];
$del=mysqli_query($con,"DELETE FROM water_counter WHERE wid='$id'");
if ($del) {
	header('location:dwater.php');
} ?>