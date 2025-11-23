<?php 
include 'conn.php';
$aa=$_GET['a'];
$bb=$_GET['b'];
$cc=$_GET['c'];
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
    <h2>Edit Payment</h2>
    
    <form method="POST">
                <label>Payment Id</label>
        <input type="text" name="id" readonly="readonly" value="<?php echo $aa; ?>">
        <label>Payment Amount</label>
        <input type="text" name="full" placeholder="Enter Product Name"  value="<?php echo $bb; ?>"> 

        <label>Payment Date</label>
        <input type="date" name="loc" value="<?php echo $cc; ?>">
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
    $ins=mysqli_query($con,"UPDATE payments SET amount = '$a', paid_date = '$b' WHERE pid = '$id'");
    if ($ins) {
        header('location:dpayment.php');
    }
}
 ?>
