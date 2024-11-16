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
    $product_id = $_POST['product_id'];
    $inventory_id = $_POST['inventory_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];

    // SQL query to insert data into the Products table
    $sql = "INSERT INTO Products (product_id, inventory_id, product_name, product_price, product_type) 
            VALUES ('$product_id', '$inventory_id', '$product_name', '$product_price', '$product_type')";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Product Added Successfully</h1>";
        echo "<p>Product ID: $product_id</p>";
        echo "<p>Inventory ID: $inventory_id</p>";
        echo "<p>Product Name: $product_name</p>";
        echo "<p>Product Price: $product_price</p>";
        echo "<p>Product Type: $product_type</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
