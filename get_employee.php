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
    $employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);

    // SQL query to fetch data from the Employee table
    $sql = "SELECT * FROM `employee` WHERE `employee_id` = '$employee_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);

            // Extract fields from the row
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $role = $row['role'];
            $manager_id = $row['manager_id'];

            // Display the employee information
            echo "<h1>Employee Information:</h1>";
            echo "<p>Employee ID: $employee_id</p>";
            echo "<p>First Name: $first_name</p>";
            echo "<p>Last Name: $last_name</p>";
            echo "<p>Role: $role</p>";
            echo "<p>Manager ID: " . ($manager_id ? $manager_id : "N/A") . "</p>";
        } else {
            echo "<p>No employee found with ID: $employee_id</p>";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
