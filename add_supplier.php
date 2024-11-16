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
    $supplier_id = $_POST['supplier_id'];
    $supplier_name = $_POST['supplier_name'];
    $phone_number = $_POST['phone_number'];
    $stock_purchase_id = $_POST['stock_purchase_id'];

    // SQL query to insert data into the Supplier table
    $sql = "INSERT INTO Supplier (supplier_id, supplier_name, phone_number, stock_purchase_id) 
            VALUES ('$supplier_id', '$supplier_name', '$phone_number', '$stock_purchase_id')";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Supplier Added Successfully</h1>";
        echo "<p>Supplier ID: $supplier_id</p>";
        echo "<p>Supplier Name: $supplier_name</p>";
        echo "<p>Phone Number: $phone_number</p>";
        echo "<p>Stock Purchase ID: $stock_purchase_id</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
