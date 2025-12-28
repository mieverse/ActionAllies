<!DOCTYPE html>
<html>
<head>
    <title>Action Allies - Login</title>
    <style>
        /* General body */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('elements/background/login.png') no-repeat center center fixed;
            background-size: cover;
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

        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px 0;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
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

        form + form {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">

    <h1>Organization Login</h1>

    <form action="loginprocess.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <!-- Guest access -->
    <form action="../index.php" method="GET">
        <button class="guest-btn" type="submit">Use as Guest</button>
    </form>

</div>

</body>
</html>
