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
    <h2>Customers Informations</h2>
    <p>
<div class="table-box">

    <table>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Location</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>

            <?php 
include 'conn.php';
$sel=mysqli_query($con,"SELECT * FROM customers");
while ($row=mysqli_fetch_array($sel)) {
   echo "<tr>";
   echo "<td>".$row[0]."</td>";
   echo "<td>".$row[1]."</td>";
   echo "<td>".$row[2]."</td>";
   echo "<td>".$row[3]."</td>";
     echo "<td>
          <a href='editcustomers.php?a=".$row[0]."&b=".$row[1]."&c=".$row[2]."&d=".$row[3]." ' class='btn-edit'>Edit</a>
          <a href='deletecustomers.php?id=".$row[0]."' class='btn-delete'>Delete</a>
        </td>";
  echo "</tr>";

   echo "</tr>";
}
             ?>
    </table>
</div>

    </p>
</div>

<footer>
    &copy;  Water Bill Management. All rights reserved.
</footer>

</body>
</html>
