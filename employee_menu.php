<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <style>
        body {
            background-color: #e4e2e2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        .menu-container {
            margin: 0 auto;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .menu-container button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #8b553f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .menu-container button:hover {
            background-color: #6f4331;
        }
    </style>
</head>
<body>
    <h1>Employee Management</h1>
    <div class="menu-container">
        <form action="" method="get">
            <button type="submit" name="action" value="add">Add Employee</button>
            <button type="submit" name="action" value="view">View Employee</button>
            <button type="submit" name="action" value="update">Update Employee</button>
            <button type="submit" name="action" value="delete">Delete Employee</button>
        </form>
    </div>

    <?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Redirect based on the selected action
    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        switch ($action) {
            case 'add':
                header('Location: add_employee.php'); // Ensure this file exists
                break;
            case 'view':
                header('Location: view_employee.php'); // Ensure this file exists
                break;
            case 'update':
                header('Location: update_employee.php'); // Ensure this file exists
                break;
            case 'delete':
                header('Location: delete_employee.php'); // Ensure this file exists
                break;
            default:
                echo "<p style='text-align: center; color: red;'>Invalid action!</p>";
        }
        exit;
    }
    ?>
</body>
</html>
