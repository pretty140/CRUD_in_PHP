<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>display</title>
</head>
<body>
	<button><a href="logout.php">logout</a></button><br><br>
	<table border="1" bgcolor="skyblue" >

		<tr>
			<th bgcolor="green">id</th>
			<th bgcolor="green">username</th>
			<th bgcolor="green">password</th>
			<th colspan="5">operation</th>
		</tr>
		<?php
		$conn=mysqli_connect('localhost','root','','viva');
		$result=mysqli_query($conn,"SELECT * FROM client");
		while ($row=mysqli_fetch_array($result)) {
			
		
		?>
		<tr>
			<td><?php echo $row['id'];?> </td>
			<td><?php echo $row['username'];?> </td>
			<td><?php echo $row['password'];?> </td>
			<td><a href="delete.php?id=<?php echo $row['id'];?>">delete</td>
				<td><a href="update.php?id=<?php echo $row['id'];?>">update</td>
		</tr>
		<?php
	}
		?>
	</table>

</body>
</html>