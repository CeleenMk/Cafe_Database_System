<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stock_purchase_id = $_POST['stock_purchase_id'];
    $inventory_id = $_POST['inventory_id'];
    $supplier_id = $_POST['supplier_id'];
    $purchase_quantity = $_POST['purchase_quantity'];
    $purchase_date = $_POST['purchase_date'];
    $received_by = $_POST['received_by'];

    echo "<h1>Stock Purchase Added Successfully</h1>";
    echo "<p>Stock Purchase ID: $stock_purchase_id</p>";
    echo "<p>Inventory ID: $inventory_id</p>";
    echo "<p>Supplier ID: $supplier_id</p>";
    echo "<p>Purchase Quantity: $purchase_quantity</p>";
    echo "<p>Purchase Date: $purchase_date</p>";
    echo "<p>Received By: $received_by</p>";
}
?>
