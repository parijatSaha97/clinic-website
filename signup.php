<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /* Reset some default styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3498db, #2c3e50);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .signup-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            max-width: 100%;
            text-align: center;
            padding: 20px;
        }

        .signup-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .signup-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .signup-form label {
            width: 100%;
            max-width: 300px;
            text-align: left;
            margin-bottom: 5px;
            color: #333;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="password"],
        .signup-form input[type="date"] {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signup-form select {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signup-form .signup-button {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .signup-form .signup-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Sign Up</h2> 
    <form class="signup-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>

        <label for="user_role">User Role</label>
        <select id="user_role" name="user_role" required>
            <option value="" disabled selected>Select appropiate role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <button type="submit" class="signup-button">Sign Up</button>
        <div class="login-footer">
            <p>Do you have an account? <a href="login.php">Log In</a></p>
        </div>
    </form>
</div>

</body>
</html>
