<!Doctype html>
    <html>
    <head>
        
    </head>
<form action="#" method="POST">
    <h2>Add New Customer</h2>
    First Name:
    <input type="text" name="fname"><br>

    Last Name:
    <input type="text" name="lname"><br>

    <input type="submit" value="Submit" name="submit">
  </form>
  <?php
  include("connection.php");
  if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $query="INSERT INTO customers(first_name,last_name) values('$fname','$lname')";
  $data=mysqli_query($conn,$query);
  if ($data) {

  	header("location:display.php");
  }else{
  	echo "no";
  }
  }


  header("location:update.php");

  ?>

</body>
</html>