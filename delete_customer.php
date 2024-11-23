<?php
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cafe_management_db";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $customer_id = $_POST['customer_id'];

    // SQL query to insert data into the Customer table
    $sql = "DELETE FROM `customer` WHERE `customer_id`='$customer_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Customer deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}