<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join Us – Choose Department</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background-image: url('../elements/background/any.png');
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-card {
            width: 520px; /* 🔽 CHANGED: reduced from 600px */
            background: white;
            padding: 30px 35px; /* 🔽 CHANGED: reduced padding */
            border-radius: 18px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.25);
            text-align: center;
        }

        h1 {
            margin-bottom: 22px; /* 🔽 CHANGED: reduced spacing */
        }

        select {
            width: 100%;
            height: 44px; /* 🔽 CHANGED: reduced from 48px */
            padding: 0 12px; /* 🔽 CHANGED */
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 15px;
            margin-bottom: 20px; /* 🔽 CHANGED */
        }

        button {
            width: 100%;
            height: 44px; /* 🔽 CHANGED: reduced from 48px */
            background: #0a7cff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
        }

        button:hover {
            background: #055fd1;
        }
    </style>
</head>

<body>

<div class="form-card">

    <h1>Choose Department</h1>

    <form action="signup2process.php" method="post">

        <select name="department" required>
            <option value="" disabled selected>Select Department</option>
            <option value="Event Planning">Event Planning</option>
            <option value="HR">HR</option>
            <option value="Marketing & Social Media">Marketing & Social Media</option>
            <option value="Graphics">Graphics</option>
            <option value="Editorial">Editorial</option>
        </select>

        <button type="submit">Next</button>

    </form>

</div>

</body>
</html>
