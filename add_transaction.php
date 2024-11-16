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
    $transaction_id = $_POST['transaction_id'];
    $customer_id = $_POST['customer_id'];
    $employee_id = $_POST['employee_id'];
    $order_id = $_POST['order_id'];

    // SQL query to insert data into the Transaction table
    $sql = "INSERT INTO Transaction (transaction_id, customer_id, employee_id, order_id) 
            VALUES ('$transaction_id', " . 
            ($customer_id ? "'$customer_id'" : "NULL") . ", 
            '$employee_id', " . 
            ($order_id ? "'$order_id'" : "NULL") . ")";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Transaction Added Successfully</h1>";
        echo "<p>Transaction ID: $transaction_id</p>";
        echo "<p>Customer ID: " . ($customer_id ? $customer_id : "N/A") . "</p>";
        echo "<p>Employee ID: $employee_id</p>";
        echo "<p>Order ID: " . ($order_id ? $order_id : "N/A") . "</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
