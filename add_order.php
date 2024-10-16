<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $order_date = $_POST['order_date'];

    echo "<h1>Order Added Successfully</h1>";
    echo "<p>Order ID: $order_id</p>";
    echo "<p>Product ID: $product_id</p>";
    echo "<p>Order Date: $order_date</p>";
}
?>
