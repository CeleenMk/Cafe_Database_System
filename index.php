<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #e4e2e2; 
        }

        /* Sidebar  */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #8b553f; 
            overflow-x: hidden;
            transition: 0.3s; 
            padding-top: 60px;
        }

        .sidebar.closed {
            width: 0;
        }

        /* Sidebar title */
        .sidebar .sidebar-title {
            width: 250px;
            background-color: #8b553f; 
            color: white; 
            text-align: center;
            padding: 20px;
            font-size: 20px;
            transition: 0.3s;
        }

        .sidebar.closed .sidebar-title {
            width: 0;
            padding: 0;
            opacity: 0;
        }

        /* Links in sidebar */
        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            font-size: 18px;
            color: white; 
            display: block;
            transition: 0.3s;
        }

        
        .sidebar a:hover {
            background-color: #575757; 
        }

        .hamburger {
            font-size: 30px;
            cursor: pointer;
            color: white;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1000; /* Ensure it stays on top */
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .sidebar.closed ~ .main-content {
            margin-left: 0;
        }

        iframe {
            width: 100%;
            height: 600px;
            border: none;
        }
    </style>
</head>
<body>

    <!-- Hamburger icon -->
    <span class="hamburger" onclick="toggleSidebar()">&#9776;</span>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <div class="sidebar-title">
            Dashboard
        </div>
        <a href="employee.html" target="content-frame">Employee Management</a>
        <a href="Customer.html" target="content-frame">Customer Management</a>
        <a href="Transaction.html" target="content-frame">Transaction Management</a>
        <a href="Orders.html" target="content-frame">Orders Management</a>
        <a href="product.html" target="content-frame">Product Management</a>
        <a href ="inventory.html" target="content-frame">Inventory Management</a>
        <a href= "supplier.html" target="content-frame">Supplier Management</a>
        <a href="stock_purchase.html" target="content-frame">Stock Purchases Management</a>
    </div>

    <!-- Main content area -->
    <div class="main-content">
        <h1>Cafe Database Dashboard</h1>
        <p>Select any of the forms from the menu on the left to manage the system.</p>
        <iframe name="content-frame"></iframe>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("closed");
        }
    </script>

</body>
</html>
