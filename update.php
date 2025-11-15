
<?php
$conn=mysqli_connect('localhost','root','','viva');
 if(isset($_GET['id'])){
 	$id=$_GET['id'];
 	$result=mysqli_query($conn,"SELECT * from client WHERE id=$id");
 	$row=mysqli_fetch_assoc($result);
 }
 if (isset($_POST['update'])) {
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$id=$_POST['id'];
 	$sql="UPDATE client SET username='$username',password='$password' WHERE id='$id'";
 	if(mysqli_query($conn,$sql)){
 		header('location:display.php');
 	}else{
 		echo "update is failed";
 	}

 }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>create</title>
</head>
<body>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
	<label>F_username</label><br>
	<input type="text" name="username" value="<?php echo $row['username'];?>"><br>
	<label>F_password</label><br>
	<input type="text" name="password" value="<?php echo $row['password'];?>"><br>
	<input type="submit" name="update" value="update"></form>

</body>
</html>