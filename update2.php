<?php
include("connection.php"); 
$ID =$_GET['ID'];
$upda = mysqli_query($conn, "SELECT * FROM customers WHERE ID='$ID'"); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Customer</title>
</head>
<body>
    <form action="update3.php" method="POST">
        ID:
        <input type="text" name="ID" value="<?php echo $rows['ID'];?>"><br>
        First Name:
        <input type="text" name="first_name" value="<?php echo $rows['first_name'];?>"><br>
        Last Name:
        <input type="text" name="last_name" value="<?php echo $rows['last_name'];?>"><br>
        <input type="submit" name="update" value="Change">
    </form>
</body>
</html>

