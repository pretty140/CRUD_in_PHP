
<?php
$conn=mysqli_connect('localhost','root','','viva');
if (isset($_POST['create'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="INSERT INTO `client` (`username`, `password`) VALUES ( '$username','$password')";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "create is done";
		header("location:login.php");
	}else{
		echo "create is failed";
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
	<label>F_username</label><br>
	<input type="text" name="username" placeholder="enter username"><br>
	<label>f_password</label><br>
	<input type="text" name="password" placeholder="enter password"><br>
	<input type="submit" name="create" value="create"></form>

</body>
</html>