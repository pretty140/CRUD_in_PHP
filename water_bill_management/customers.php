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
    <h2>Add Customers Informations</h2>
    
    <form method="POST">
        <label>Full Names</label>
        <input type="text" name="full" placeholder="Enter Full Names" required>

        <label>Location</label>
        <input type="text" name="loc" placeholder="Enter Location" required>

        <label>Telephone</label>
        <input type="number" name="tel" placeholder="Enter Telephone" required>

        <button type="submit" name="sub"> Create Account</button>
    </form>
</div>
</body>
</html>
<?php 
include 'conn.php';
if (isset($_POST['sub'])) {
    $a=$_POST['full'];
    $b=$_POST['loc'];
    $c=$_POST['tel'];
    $ins=mysqli_query($con,"INSERT INTO customers (cid, Fullnames, Location, Telephone) VALUES (NULL, '$a', '$b', '$c')");
    if ($ins) {
        header('location:dcustomers.php');
    }
}
 ?>