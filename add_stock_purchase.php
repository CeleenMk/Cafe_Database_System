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
    // Retrieve form data
    $stock_purchase_id = $_POST['stock_purchase_id'];
    $inventory_id = $_POST['inventory_id'];
    $supplier_id = $_POST['supplier_id'];
    $purchase_quantity = $_POST['purchase_quantity'];
    $purchase_date = $_POST['purchase_date'];
    $received_by = $_POST['received_by'];

    // SQL query to insert data into the Stock_Purchases table
    $sql = "INSERT INTO Stock_Purchases (stock_purchase_id, inventory_id, supplier_id, purchase_quantity, purchase_date, received_by) 
            VALUES ('$stock_purchase_id', '$inventory_id', '$supplier_id', '$purchase_quantity', '$purchase_date', '$received_by')";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Stock Purchase Added Successfully</h1>";
        echo "<p>Stock Purchase ID: $stock_purchase_id</p>";
        echo "<p>Inventory ID: $inventory_id</p>";
        echo "<p>Supplier ID: $supplier_id</p>";
        echo "<p>Purchase Quantity: $purchase_quantity</p>";
        echo "<p>Purchase Date: $purchase_date</p>";
        echo "<p>Received By: $received_by</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
