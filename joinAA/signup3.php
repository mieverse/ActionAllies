<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join Us – Motivation</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: url('../elements/background/any.png'); 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-card {
            width: 520px;              /* smaller width */
            background: rgba(255,255,255,0.95);
            padding: 30px 35px;        /* reduced padding */
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.25);
        }

        label {
            font-weight: bold;
            font-size: 20px;           /* smaller text */
            margin-bottom: 12px;
            display: block;
            text-align: center;
        }

        textarea {
            width: 100%;
            height: 160px;             /* shorter textarea */
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            resize: none;
            margin-bottom: 15px;
        }

        .word-note {
            text-align: right;
            font-size: 12px;
            color: #666;
            margin-bottom: 20px;
        }

        button {
            width: 100%;
            height: 45px;
            background: #0a7cff;
            color: white;
            font-size: 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        button:hover {
            background: #055fd1;
        }
    </style>
</head>

<body>

<div class="form-card">
    <form action="signup3process.php" method="post">

        <label for="motivation">Why do you want to join our NGO?</label>

        <textarea
            name="motivation"
            id="motivation"
            maxlength="250"
            placeholder="Write your answer here."
            required></textarea>

        <div class="word-note">Maximum 250 words</div>

        <button type="submit">Submit Application</button>

    </form>
</div>

</body>
</html>
