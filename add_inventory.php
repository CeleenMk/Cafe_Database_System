<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventory_id = $_POST['inventory_id'];
    $inventory_name = $_POST['inventory_name'];
    $inventory_type = $_POST['inventory_type'];
    $stock_quantity = $_POST['stock_quantity'];
    $inventory_price = $_POST['inventory_price'];

    echo "<h1>Inventory Added Successfully</h1>";
    echo "<p>Inventory ID: $inventory_id</p>";
    echo "<p>Inventory Name: $inventory_name</p>";
    echo "<p>Inventory Type: $inventory_type</p>";
    echo "<p>Stock Quantity: $stock_quantity</p>";
    echo "<p>Inventory Price: $inventory_price</p>";
}
?>
