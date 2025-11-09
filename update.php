<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
include("connection.php");

// Check if ID is passed in URL
if (!isset($_GET['id'])) {
    echo "No customer ID provided!";
    exit();
}

$id = intval($_GET['id']); // sanitize ID

// Fetch current customer data
$query = "SELECT * FROM customers WHERE ID = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "Customer not found!";
    exit();
}

$row = mysqli_fetch_assoc($result);

// Update customer if form submitted
if (isset($_POST['update'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);

    $updateQuery = "UPDATE customers SET first_name='$fname', last_name='$lname' WHERE ID=$id";
    $updateData = mysqli_query($conn, $updateQuery);

    if ($updateData) {
        header("Location: display.php"); // redirect to main display page
        exit();
    } else {
        echo "<p style='color:red;'>Error updating data: " . mysqli_error($conn) . "</p>";
    }
}
?>


</body>
</html>