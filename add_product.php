<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $inventory_id = $_POST['inventory_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['Product_price'];
    $product_type = $_POST['product_type'];

    echo "<h1>Product Added Successfully</h1>";
    echo "<p>Product ID: $product_id</p>";
    echo "<p>Inventory ID: $inventory_id</p>";
    echo "<p>Product Name: $product_name</p>";
    echo "<p>Product Price: $product_price</p>";
    echo "<p>Product Type: $product_type</p>";
}
?>
