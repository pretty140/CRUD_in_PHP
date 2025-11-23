<?php 
include 'conn.php';
$aa=$_GET['a'];
$bb=$_GET['b'];
$cc=$_GET['c'];
$dd=$_GET['d'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #ecf0f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-box {
            width: 350px;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .signup-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .signup-box label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .signup-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
        }

        .signup-box button {
            width: 100%;
            padding: 10px;
            background: #1abc9c;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .signup-box button:hover {
            background: #16a085;
        }
    </style>
</head>
<body>

<div class="signup-box">
    <h2>Edit Customers</h2>
    
    <form method="POST">
                <label>Customer Id</label>
        <input type="text" name="id" readonly="readonly" value="<?php echo $aa; ?>">
        <label>Full Names</label>
        <input type="text" name="full" placeholder="Enter Product Name"  value="<?php echo $bb; ?>"> 

        <label>Location</label>
        <input type="text" name="loc" value="<?php echo $cc; ?>">
        <label>Phone Number</label>
        <input type="text" name="man" placeholder="Enter Price" value="<?php echo $dd; ?>">
        <button type="submit" name="sub"> Save Changes</button>
    </form>
</div>
</body>
</html>
<?php 
include 'conn.php';
if (isset($_POST['sub'])) {
    $id=$_POST['id'];
    $a=$_POST['full'];
    $b=$_POST['loc'];
    $c=$_POST['man'];
    $ins=mysqli_query($con,"UPDATE customers SET Fullnames = '$a', Location = '$b', Telephone = '$c' WHERE cid = '$id'");
    if ($ins) {
        header('location:dCustomers.php');
    }
}
 ?>
