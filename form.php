














<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

<style>
  body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input[type="text"], input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      background: #28a745;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background: #218838;
    }
  </style>
</head>
<body>

  <form action="#" method="POST">
    <h2>Add New Customer</h2>
    First Name:
    <input type="text" name="fname">

    Last Name:
    <input type="text" name="lname">

    <input type="submit" value="Submit" name="submit">
  </form>
  <?php
  include("connection.php");
  if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $query="INSERT INTO customers(ID,first_name,last_name) values('','$fname','$lname')";
  $data=mysqli_query($con,$query);
  if ($data) {

  	echo "YES";
  }else{
  	echo "no";
  }
  }
  ?>

</body>
</html>