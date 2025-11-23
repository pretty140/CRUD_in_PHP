<?php 
include 'conn.php';
 $error=[];
if (isset($_POST['sub'])) {
    $c= trim($_POST['username']);
    $d= trim($_POST['password']);
    $dd= trim($_POST['password_conf']);

   if (empty($c)) {
     $error[]="username cannot be empty";
   }
   if (empty($d)) {
     $error[]="The password cannot be empty";
   }
   if (empty($dd)) {
     $error[]="The Conferm password cannot be empty";
   }

        if(strlen($c) < 6){
        $error[] = "Password must be at least 6 characters";
    }

       if($d !== $dd){
        $error[] = "Passwords do not match";
    }
    if(empty($error)){
        $confp = password_hash($d, PASSWORD_DEFAULT);

    $ins=mysqli_query($con,"INSERT INTO users (uid, username, password) VALUES (NULL, '$c', '$d')");

    if ($ins) {
        header('location:login.php');
    }
    else{
        echo "<script>alert('fail')</script>";
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

        <h2>Signup Into Facebook</h2>
<?php
if(!empty($error)){
    foreach($error as $e){
        echo "<p style='color:red;'>$e</p>";
    }
}
?>
        <form  method="POST">

            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_conf" placeholder="Conferm  Password">

            <button type="submit" class="btn-login" name="sub">Sign Up</button>

        </form>

    </div>

</body>
</html>
