<?php
include("connection.php");
$ID=$_POST['ID'];
if(isset($_POST['delete']))
{
	$del=mysqli_query($conn,"DELETE FROM customers WHERE ID='$ID'");
	if($del)
	{
		echo "record deleted";
	}
	else
	{
		echo "record not deleted";
	}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 		ID:
 		<input type="text" name="ID"><br>
 		<input type="submit" name="delete" value="remove">
 		
 	</form>
 
 </body>
 </html>
