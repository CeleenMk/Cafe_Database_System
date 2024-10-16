<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST['customer_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $points = $_POST['points'];

    echo "<h1>Customer Added Successfully</h1>";
    echo "<p>Customer ID: $customer_id</p>";
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Rewards Points: $points</p>";
}
?>
