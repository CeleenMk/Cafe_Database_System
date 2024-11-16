<?php
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cafe_management_db";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if REQUEST_METHOD is defined and equal to POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $inventory_id = $_POST['inventory_id'];
    $inventory_name = $_POST['inventory_name'];
    $inventory_type = $_POST['inventory_type'];
    $stock_quantity = $_POST['stock_quantity'];
    $inventory_price = $_POST['inventory_price'];

    // SQL query to insert data into the Inventory table
    $sql = "INSERT INTO Inventory (inventory_id, inventory_name, inventory_type, stock_quantity, inventory_price) 
            VALUES ('$inventory_id', '$inventory_name', '$inventory_type', '$stock_quantity', '$inventory_price')";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Inventory Added Successfully</h1>";
        echo "<p>Inventory ID: $inventory_id</p>";
        echo "<p>Inventory Name: $inventory_name</p>";
        echo "<p>Inventory Type: $inventory_type</p>";
        echo "<p>Stock Quantity: $stock_quantity</p>";
        echo "<p>Inventory Price: $inventory_price</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>