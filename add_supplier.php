<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $supplier_id = $_POST['supplier_id'];
    $supplier_name = $_POST['supplier_name'];
    $phone_number = $_POST['phone_number'];
    $stock_purchase_id = $_POST['stock_purchase_id'];

    echo "<h1>Supplier Added Successfully</h1>";
    echo "<p>Supplier ID: $supplier_id</p>";
    echo "<p>Supplier Name: $supplier_name</p>";
    echo "<p>Phone Number: $phone_number</p>";
    echo "<p>Stock Purchase ID: $stock_purchase_id</p>";
}
?>
