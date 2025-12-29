<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AA Feedback</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;

            /* Background image */
            background-image: url('../elements/background/any.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-card {
            width: 480px;                          /* smaller container */
            background: rgba(255, 255, 255, 0.95); /* slight transparency */
            padding: 28px 32px;                    /* reduced padding */
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
        }

        label {
            font-weight: bold;
            margin-bottom: 6px;
            display: block;
            font-size: 14px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin-bottom: 15px;
        }

        textarea {
            height: 140px;        /* smaller textarea */
            resize: none;
        }

        .note {
            text-align: right;
            font-size: 12px;
            color: #666;
            margin-bottom: 18px;
        }

        button {
            width: 100%;
            height: 44px;
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

    <h1>Share Your Thoughts!</h1>

    <form action="feedbackprocess.php" method="post">

        <label>Email (Optional)</label>
        <input type="email" name="email" placeholder="Leave blank to stay anonymous">

        <label>Feedback</label>
        <textarea name="feedback" maxlength="150"
                  placeholder="Write your feedback here." required></textarea>

        <div class="note">Maximum 150 words</div>

        <button type="submit">Submit</button>

    </form>

</div>

</body>
</html>
