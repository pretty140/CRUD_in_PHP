
<?php
$conn=mysqli_connect('localhost','root','','viva');
if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql=mysqli_query($conn,"SELECT * FROM client WHERE username='$username' AND password='$password'");
	$result=mysqli_num_rows($sql);
	if($result>0){
		//echo "login is done";
		header("location:display.php");
	}else{
		echo "login is failed";
	}
}
?>
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
	<input type="submit" name="login" value="login"></form>

</body>
</html>