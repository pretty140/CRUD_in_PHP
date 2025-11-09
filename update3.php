<?php
include("connection.php")
$ID=$_POST['ID'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
if(isset($_POST['update']))
{
$update=mysqli_query($conn,"UPDATE customers SET first_name='$first_name',last_name='$last_name' WHERE ID='$ID'");
if($update)
{
	echo "record updated well";
	enclude("display.php");
}
else
{
	echo "record not update well";
}}
?>