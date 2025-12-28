<!DOCTYPE html>
<html>
<head>
    <title>Action Allies - Login</title>
    <style>
        /* Full page background */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('../elements/background/any.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Login container */
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            width: 350px;
            text-align: center;
        }

        h1 {
            margin-bottom: 25px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .guest-btn {
            background-color: #28a745;
        }

        .guest-btn:hover {
            background-color: #1e7e34;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h1>Member Login</h1>

    <!-- Login form -->
    <form action="loginprocess.php" method="POST">
        <input type="text" name="username" placeholder="Enter your username" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <!-- Guest access -->
    <a href="../index.php">
        <button type="button" class="guest-btn">Use as Guest</button>
    </a>
</div>
</body>
</html>
