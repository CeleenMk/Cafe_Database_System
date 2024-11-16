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
    $user = $_POST['username'];
    $current_pass = $_POST['current_password'];
    $new_pass = $_POST['new_password'];

    // Vulnerable SQL query
    $sql = "UPDATE users SET password = '$new_pass' WHERE username = '$user' AND password = '$current_pass'";
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully!";
    } else {
        echo "Error updating password: " . $conn->error;
    }
}

$conn->close();
?>
