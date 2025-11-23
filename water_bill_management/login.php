
 <?php 
include 'conn.php';
$err=[];
session_start();
if (isset($_POST['sub'])) {
    $u=trim($_POST['username']);
    $p=trim($_POST['password']);
    
    if(empty($u) || empty($p)){
        $err[] = "All fields are required";
    } else {

      $ins=mysqli_query($con,"SELECT * FROM users WHERE username='$u' AND password='$p'");
    if ($ins->num_rows>0) {
        $_SESSION['users']=$u;
        setcookie("user1", $u, time() + 60, "/");
        header('location:home.php');
    }
    else{
        echo "<script>alert('Invalid Username or Password')</script>";
    }
}
}

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f0f2f5;
            font-family: Arial, sans-serif;
        }

        .logo {
            text-align: center;
            margin-top: 70px;
        }

        .logo h1 {
            color: #1877f2;
            font-size: 55px;
            margin: 0;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: 350px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.15);
        }

        .container h2 {
            text-align: center;
            margin-top: 0;
            font-size: 20px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        input::placeholder {
            color: #999;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #1877f2;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 5px;
        }

        .links {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .links a {
            color: #1877f2;
            text-decoration: none;
        }
    </style>
</head>
<body>

    
    <div class="logo">
        <h1>facebook</h1>
    </div>

    <div class="container">

        <h2>Log Into Facebook</h2>
<?php
if(!empty($err)){
    foreach($err as $e){
        echo "<p style='color:red;'>$e</p>";
    }
}
?>
        <form  method="POST">

            <input type="text" name="username" placeholder="Email or phone number">
            <input type="password" name="password" placeholder="Password">

            <button type="submit" class="btn-login" name="sub">Log In</button>

            <div class="links">
                <a href="#">Forgot account?</a> · 
                <a href="signup.php">Sign up for Facebook</a>
            </div>

        </form><br><br>

        <form method="POST">
    <button type="submit" name="btn-login" class="btn-login">Login with Google</button>
</form>

    </div>

</body>
</html>
