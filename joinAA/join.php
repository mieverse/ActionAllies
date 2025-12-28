<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Information</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background-image: url('../elements/background/any.png'); no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form container */
        .form-card {
            width: 600px; /* smaller width */
            background: white;
            padding: 35px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.25);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px; /* smaller heading */
        }

        label {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 6px;
            display: block;
        }

        input {
            width: 100%;
            height: 40px;
            padding: 0 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* Two-column rows */
        .row {
            display: flex;
            gap: 15px;
        }

        .row .field {
            flex: 1;
        }

        /* Address row with 3 inputs */
        .address-row {
            display: flex;
            gap: 15px;
            margin-bottom: 18px;
        }

        .address-row .field {
            flex: 1;
        }

        button {
            width: 100%;
            height: 45px;
            background: #0a7cff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        button:hover {
            background: #055fd1;
        }

        /* Responsive for smaller screens */
        @media (max-width: 650px) {
            .form-card {
                width: 90%;
                padding: 25px 20px;
            }

            .row, .address-row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="form-card">
    <h1>Personal Information</h1>

    <form action="signup2.php" method="post">

        <input type="text" name="first_name" placeholder="First Name" required>

        <div class="row">
            <div class="field">
                <input type="text" name="middle_name" placeholder="Middle Name">
            </div>
            <div class="field">
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
        </div>

        <input type="date" name="dob" placeholder="Date of Birth" required>

        <div class="row">
            <div class="field">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="field">
                <input type="text" name="phone" placeholder="Phone Number" required>
            </div>
        </div>

        <div class="address-row">
            <div class="field">
                <input type="text" name="road" placeholder="Road" required>
            </div>
            <div class="field">
                <input type="text" name="zip" placeholder="ZIP" required>
            </div>
            <div class="field">
                <input type="text" name="city" placeholder="City" required>
            </div>
        </div>

        <button type="submit">Next</button>

    </form>
</div>

</body>
</html>
