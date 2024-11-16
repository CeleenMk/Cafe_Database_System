<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Demonstration (Update)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e4e2e2; 
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff; 
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #8b553f; 
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #8b553f; 
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #6f4331; 
        }

        p {
            margin-top: 10px;
            font-size: 14px;
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Update Password</h1>
        <form action="update_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter username" required>
            
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" placeholder="Enter current password" required>
            
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
            
            <button type="submit">Update Password</button>
        </form>
        <p>
            *Try injecting SQL commands like <code>' OR '1'='1</code> into the fields.
        </p>
    </div>
</body>
</html>
