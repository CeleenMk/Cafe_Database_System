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
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $points = $_POST['points'];

    // SQL query to insert data into the Customer table
    $sql = "INSERT INTO customer (customer_id, first_name, last_name, points) 
            VALUES ('$customer_id', '$first_name', '$last_name', '$points')";

    if (mysqli_query($conn, $sql)) {
        echo "New customer added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}