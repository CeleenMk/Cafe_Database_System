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

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);

    // SQL query to fetch data from the Employee table
    $sql = "SELECT * FROM `customer` WHERE `customer_id` = '$customer_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);

            // Extract fields from the row
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $points = $row['points'];

            // Display the employee information
            echo "<h1>Employee Information:</h1>";
            echo "<p>Employee ID: $customer_id</p>";
            echo "<p>First Name: $first_name</p>";
            echo "<p>Last Name: $last_name</p>";
            echo "<p>Points: $points</p>";
        } else {
            echo "<p>No customer found with ID: $customer_id</p>";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
