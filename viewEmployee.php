<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
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
    <h1>Employee Form</h1>
    <form action="get_employee.php" method="post">
        <table>
            <tr>
                <td><label for="employee_id">Employee ID:</label></td>
                <td><input type="text" id="employee_id" name="employee_id" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="View Employee">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
