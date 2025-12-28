<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;

            /* Background image path relative to homepage.php */
            background-image: url('elements/background/homepage.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: flex-end; /* button at bottom */
        }

        .see-more-btn {
            margin-bottom: 85px;
            padding: 12px 25px;
            background-color: #28a745; /* green */
            color: white;
            font-weight: bold; /* bold text */
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .see-more-btn:hover {
            background-color: #1e7e34; /* darker green on hover */
        }
    </style>
</head>
<body>

    <!-- Correct path to login.php inside login folder -->
    <a href="login/login.php" class="see-more-btn">See More</a>

</body>
</html>
