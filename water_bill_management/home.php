<?php 
include 'conn.php';
session_start();
if (!isset($_SESSION['users']) || !isset($_COOKIE['user1'])) {
    header('location:login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers Informations</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: green;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: darkgreen;
            padding: 10px 20px;
            display: flex;
            justify-content: flex-end; /* move links to the right */
            gap: 15px;
        }

        nav a {
            color: #ecf0f1;
            padding: 12px 18px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            background: #1abc9c;
            color: white;
        }

        .container {
            flex: 1;
            padding: 20px;
            background: white;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        footer {
            background: green;
            color: #fff;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        .table-box {
            width: 90%;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }

        th {
            background: #1abc9c;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #bdc3c7;
        }

        tr:hover {
            background: #f2f2f2;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }
        .btn-edit, .btn-delete {
    padding: 6px 12px;
    text-decoration: none;
    color: #fff;
    border-radius: 4px;
    font-size: 14px;
}

.btn-edit {
    background-color: #007bff;
}

.btn-delete {
    background-color: #dc3545;
}

.btn-edit:hover { background-color: #0056b3; }
.btn-delete:hover { background-color: #a71d2a; }
    </style>
</head>

<body>

<header>
    <h1>Water Bill Management System</h1>
</header>

<nav>
    <a href="home.php">Home</a>
    <a href="Customers.php">Customers</a>
    <a href="water_counter.php">Water Counter</a>
    <a href="Payments.php">Payments</a>
    <a href="logout.php">Logout</a>
</nav>
<div class="container">
    <h2>Welcome to the Water Bill Management System</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>

<footer>
    &copy;  Water Bill Management System. All rights reserved.
</footer>

</body>
</html>
