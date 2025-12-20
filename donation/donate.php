<!DOCTYPE html>
<html>
<head>
    <title>Donate</title>
    <style>
    
        body.donate-bg {
            background-image: url('../elements/background/donate.png'); 
            background-size: contain;      
            background-position: center;  
            background-repeat: no-repeat;  
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;       
            align-items: center;          
        }


        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* semi-transparent for readability */
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        /* Form inputs and select */
        .form-container input,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Submit button */
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body class="donate-bg">

<div class="form-container">

    <form action="donate_process.php" method="POST">

        <input type="text" name="donor_name" placeholder="Name" required><br>

        <input type="email" name="donor_email" placeholder="Email" required><br>

        <input type="number" name="amount" placeholder="Donation Amount (in Taka)" required><br>

        <select name="payment_method" required>
            <option value="" disabled selected>Select Payment Method</option>
            <option value="Bkash">Bkash</option>
            <option value="Nagad">Nagad</option>
            <option value="Bank">Bank</option>

        </select><br><br>

        <button type="submit">Donate</button>
    </form>
</div>

</body>
</html>
