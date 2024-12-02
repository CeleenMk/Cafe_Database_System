<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection settings
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cafe_management_db";

// Connect to the database
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check database connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $manager_id = !empty($_POST['manager_id']) ? mysqli_real_escape_string($conn, $_POST['manager_id']) : NULL;

    // Check if the employee_id exists before updating
    $check_query = "SELECT * FROM Employee WHERE employee_id = '$employee_id'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Build the SQL query to update the employee
        if ($manager_id) {
            // Verify that the manager_id exists in the Employee table
            $manager_check_query = "SELECT * FROM Employee WHERE employee_id = '$manager_id'";
            $manager_check_result = mysqli_query($conn, $manager_check_query);

            if (mysqli_num_rows($manager_check_result) === 0) {
                echo "<p style='color: red;'>Error: Manager ID $manager_id does not exist.</p>";
                exit;
            }
        }

        // Update query
        $sql = "UPDATE Employee 
                SET first_name = '$first_name', 
                    last_name = '$last_name', 
                    role = '$role', 
                    manager_id = " . ($manager_id ? "'$manager_id'" : "NULL") . " 
                WHERE employee_id = '$employee_id'";

        if (mysqli_query($conn, $sql)) {
            echo "<h1>Employee Updated Successfully</h1>";
            echo "<p>Employee ID: $employee_id</p>";
            echo "<p>First Name: $first_name</p>";
            echo "<p>Last Name: $last_name</p>";
            echo "<p>Role: $role</p>";
            echo "<p>Manager ID: " . ($manager_id ? $manager_id : "N/A") . "</p>";
        } else {
            echo "<p style='color: red;'>Error updating record: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p style='color: red;'>Error: Employee ID $employee_id does not exist.</p>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
