<?php
$conn=mysqli_connect('localhost','root','','viva');
$delete=$_GET['id'];
$sql="DELETE FROM client WHERE id=$delete";
if(mysqli_query($conn,$sql)){
	header('location:display.php');
}else{
	echo "delete is failed";
}
?>