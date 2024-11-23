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
    $employee_id = $_POST['employee_id'];

    // SQL query to insert data into the Employee table
    $sql = "DELETE FROM `employee` 
            WHERE `employee_id`='$employee_id'";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Employee Deleted Successfully</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
