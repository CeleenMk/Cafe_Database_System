<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $role = $_POST['role'];
    $manager_id = $_POST['manager_id'];

    //  Print data
    echo "<h1>Employee Added Successfully</h1>";
    echo "<p>Employee ID: $employee_id</p>";
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Role: $role</p>";
    echo "<p>Manager ID: " . ($manager_id ? $manager_id : "N/A") . "</p>";
}
?>
