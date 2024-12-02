<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management</title>
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

        input[type="text"], input[type="number"], select {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            border: none;
            background-color: #8b553f; /* Dark brown */
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6f4331; /* Slightly darker */
        }
    </style>
</head>
<body>
    <h1>Employee Management</h1>
    <form id="employeeForm" method="post">
        <table>
            <!-- Employee Fields -->
            <tr>
                <td><label for="employee_id">Employee ID:</label></td>
                <td><input type="text" id="employee_id" name="employee_id" required></td>
            </tr>
            <tr>
                <td><label for="first_name">First Name:</label></td>
                <td><input type="text" id="first_name" name="first_name"></td>
            </tr>
            <tr>
                <td><label for="last_name">Last Name:</label></td>
                <td><input type="text" id="last_name" name="last_name"></td>
            </tr>
            <tr>
                <td><label for="role">Role:</label></td>
                <td><input type="text" id="role" name="role"></td>
            </tr>
            <tr>
                <td><label for="manager_id">Manager ID:</label></td>
                <td><input type="text" id="manager_id" name="manager_id"></td>
            </tr>

            <!-- Action Selector -->
            <tr>
                <td><label for="action">Select Action:</label></td>
                <td>
                    <select id="action" name="action" required>
                        <option value="">--Select--</option>
                        <option value="add">Add Employee</option>
                        <option value="delete">Delete Employee</option>
                        <option value="update">Update Employee</option>
                        <option value="view">View Employee</option>

                    </select>
                </td>
            </tr>

            <!-- Submit Button -->
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Perform Action">
                </td>
            </tr>
        </table>
    </form>

    <script>
        document.getElementById('employeeForm').addEventListener('submit', function (event) {
            const action = document.getElementById('action').value;

            if (action === 'add') {
                this.action = 'add_employee.php'; // Direct to add_employee.php
            } else if (action === 'delete') {
                this.action = 'delete_employee.php'; // Direct to delete_employee.php
            } else if (action === 'update') {
                this.action = 'update_employee.php'; // Direct to update_employee.php
            }
            else if (action === 'view') {
                    this.action = 'get_employee.php'; 
            } else {
                event.preventDefault(); // Stop submission if no action is selected
                alert('Please select a valid action.');
            }
        });
    </script>
</body>
</html>
