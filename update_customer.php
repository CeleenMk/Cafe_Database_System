<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cafe_management_db";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check database connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    $first_name = isset($_POST['first_name']) ? mysqli_real_escape_string($conn, $_POST['first_name']) : NULL;
    $last_name = isset($_POST['last_name']) ? mysqli_real_escape_string($conn, $_POST['last_name']) : NULL;
    $points = isset($_POST['points']) ? (int)$_POST['points'] : NULL;

    // Check if the customer_id exists before updating
    $check_query = "SELECT * FROM customer WHERE customer_id = '$customer_id'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Build the SQL query to update the customer
        $sql = "UPDATE customer 
                SET first_name = " . ($first_name ? "'$first_name'" : "NULL") . ", 
                    last_name = " . ($last_name ? "'$last_name'" : "NULL") . ", 
                    points = " . ($points !== NULL ? $points : "NULL") . " 
                WHERE customer_id = '$customer_id'";

        if (mysqli_query($conn, $sql)) {
            echo "<h1>Customer Updated Successfully</h1>";
            echo "<p>Customer ID: $customer_id</p>";
            echo "<p>First Name: " . ($first_name ? $first_name : "N/A") . "</p>";
            echo "<p>Last Name: " . ($last_name ? $last_name : "N/A") . "</p>";
            echo "<p>Points: " . ($points !== NULL ? $points : "N/A") . "</p>";
        } else {
            echo "<p style='color: red;'>Error updating record: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p style='color: red;'>Error: Customer ID $customer_id does not exist.</p>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
