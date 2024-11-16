<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Form</title>
    <style>
        body {
            background-color: #e4e2e2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333333;
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
            background-color: #8b553f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6f4331;
        }
    </style>
</head>
<body>
    <h1>Transaction Form</h1>
    <form action="add_transaction.php" method="post">
        <table>
            <tr>
                <td><label for="transaction_id">Transaction ID:</label></td>
                <td><input type="number" id="transaction_id" name="transaction_id" required></td>
            </tr>
            <tr>
                <td><label for="customer_id">Customer ID (Optional):</label></td>
                <td><input type="number" id="customer_id" name="customer_id"></td>
            </tr>
            <tr>
                <td><label for="employee_id">Employee ID:</label></td>
                <td><input type="number" id="employee_id" name="employee_id" required></td>
            </tr>
            <tr>
                <td><label for="order_id">Order ID (Optional):</label></td>
                <td><input type="number" id="order_id" name="order_id"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Add Transaction">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
