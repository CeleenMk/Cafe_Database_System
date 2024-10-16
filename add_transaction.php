<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transaction_id = $_POST['transaction_id'];
    $customer_id = $_POST['customer_id'];
    $employee_id = $_POST['employee_id'];
    $order_id = $_POST['order_id'];

    echo "<h1>Transaction Added Successfully</h1>";
    echo "<p>Transaction ID: $transaction_id</p>";
    echo "<p>Customer ID: " . ($customer_id ? $customer_id : "N/A") . "</p>";
    echo "<p>Employee ID: $employee_id</p>";
    echo "<p>Order ID: " . ($order_id ? $order_id : "N/A") . "</p>";
}
?>
