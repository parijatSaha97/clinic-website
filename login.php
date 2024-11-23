<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-HwGEAAOng7z5l15VrB9D9OuYfGTx2o94Aj3jGdoEdM/gydjR45c49V+XCGwWsYT5" crossorigin="anonymous">
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

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            max-width: 100%;
            text-align: center;
            padding: 20px;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            animation: fadeInUp 0.5s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            animation: fadeInUp 0.5s ease-out;
        }

        .login-button:hover {
            background-color: #2980b9;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .login-footer {
            margin-top: 20px;
            color: #777;
            animation: fadeInUp 0.5s ease-out;
        }

        .login-footer a {
            color: #3498db;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .social-icons {
            margin-top: 20px;
            animation: fadeInUp 0.5s ease-out;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            color: #3498db;
            text-decoration: none;
            font-size: 24px;
            opacity: 0.7;
            transition: opacity 0.3s ease-out;
        }

        .social-icons a:hover {
            opacity: 1;
        }

        .login-sections {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .login-sections div {
            width: 48%;
            cursor: pointer;
            transition: border 0.3s ease-out;
        }

        .active-section {
            border: 2px solid #1748fb;
        }
        .admin_class{
            background-color: yellowgreen;
    border-radius: 50px;
        }
        .user_class{
            background-color: seagreen;;
    border-radius: 50px;
        }
        @media (max-width: 768px) {
            .login-sections {
                flex-direction: column;
            }

            .login-sections div {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <div class="login-sections">
        <div class="" onclick="toggleSection('admin')">
            <h2 class="admin_section admin_class">Admin</h2>
        </div>
        <div class="" onclick="toggleSection('user')">
            <h2 class="user_section user_class">User</h2>
        </div>
    </div>
    <div>
        <form id="login-form-admin" class="login-form" style="display: none;">
            <input type="text" class="login-input" placeholder="Username" required>
            <input type="password" class="login-input" placeholder="Password" required>
            <button type="submit" class="login-button">Login</button>
        </form>
        <form id="login-form-user" class="login-form" style="display: none;">
            <input type="text" class="login-input" placeholder="Username" required>
            <input type="password" class="login-input" placeholder="Password" required>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="login-footer">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
        <div class="social-icons">
            <a href="#" class="fas fa-facebook"></a>
            <a href="#" class="fas fa-twitter"></a>
            <a href="#" class="fas fa-linkedin"></a>
            <a href="#" class="fas fa-instagram"></a>
        </div>
    </div>
</div>

<script>
    function toggleSection(section) {
        if (section === 'admin') {
            document.querySelector('.admin_section').classList.add('active-section');
            document.querySelector('.user_section').classList.remove('active-section');
            document.getElementById('login-form-admin').style.display = 'block';
            document.getElementById('login-form-user').style.display = 'none';
        } else if (section === 'user') {
            document.querySelector('.user_section').classList.add('active-section');
            document.querySelector('.admin_section').classList.remove('active-section');
            document.getElementById('login-form-user').style.display = 'block';
            document.getElementById('login-form-admin').style.display = 'none';
        }
    }
</script>

</body>
</html>
