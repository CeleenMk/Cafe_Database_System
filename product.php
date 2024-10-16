<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Form</title>
    <style>
        body {
            background-color: #e4e2e2; /* Light gray background */
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333333; /* Dark gray for the title */
        }

        table {
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        td {
            padding: 10px;
        }

        input[type="text"], input[type="number"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Button styling */
        input[type="submit"] {
            background-color: #8b553f; /* Dark brown (matching the sidebar) */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect for the button */
        input[type="submit"]:hover {
            background-color: #6f4331; /* Slightly darker on hover */
        }
    </style>
</head>
<body>
    <h1>Product Form</h1>
    <form action="add_product.php" method="post">
        <table>
            <tr>
                <td><label for="product_id">Product ID:</label></td>
                <td><input type="number" id="product_id" name="product_id" required></td>
            </tr>
            <tr>
                <td><label for="inventory_id">Inventory ID:</label></td>
                <td><input type="number" id="inventory_id" name="inventory_id" required></td>
            </tr>
            <tr>
                <td><label for="product_name">Product Name:</label></td>
                <td><input type="text" id="product_name" name="product_name" required></td>
            </tr>
            <tr>
                <td><label for="Product_price">Product Price:</label></td>
                <td><input type="number" id="Product_price" name="Product_price" required></td>
            </tr>
            <tr>
                <td><label for="product_type"> Product Type:</label></td>
                <td><input type="text" id="product_type" name="product_type" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Add Product">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
