<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table bgcolor="skyblue" border="2">
		<tr>
			<th>id</th>
			<th>first_name</th>
			<th>last_name</th>
			<th>action</th>
		</tr>
		<?php
		include("connection.php");
    $disp=mysqli_query($conn,"SELECT * FROM customers");
     while ($rows=mysqli_fetch_array($disp))
  {
		?>
		<tr>
		<td><?php echo $rows['ID']?>;</td>
		<td><?php echo $rows['first_name']?>;</td>
		<td><?php echo $rows['last_name']?>;</td>
		<td><a href="update2.php" ? id=<?php echo $rows['ID']?>;>update</a></td>
		<?php
  }
  ?>
</tr>
	</table>

</body>
</html>