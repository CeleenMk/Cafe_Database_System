<?php
// Database connection settings
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cafe_management_db";

// Connect to the database
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the request method is POST and if REQUEST_METHOD is set
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $order_date = $_POST['order_date'];

    // SQL query to insert data into the Orders table
    $sql = "INSERT INTO Orders (order_id, product_id, order_date) 
            VALUES ('$order_id', '$product_id', '$order_date')";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Order Added Successfully</h1>";
        echo "<p>Order ID: $order_id</p>";
        echo "<p>Product ID: $product_id</p>";
        echo "<p>Order Date: $order_date</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
