<!DOCTYPE html>
<html>
<head>
    <title>Sponsorship</title>
    <style>

        body.sponsor-bg {
            background-image: url('../elements/background/sponsor.png'); 
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

        /* Form container */
        .form-container {
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        /* Form inputs */
        .form-container input {
            width: 95%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Submit button */
        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }


        .view-projects-btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #17a2b8; 
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            /*font-weight: bold;*/
            margin-top: 15px;
            transition: opacity 0.3s;
        }
        .view-projects-btn:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body class="sponsor-bg">

<div class="form-container">

    <form action="sponsorprocess.php" method="POST">

        <input type="text" name="sponsor_name" placeholder="Sponsor Name" required><br>

        <input type="email" name="sponsor_email" placeholder="Sponsor Email" required><br>

        <input type="text" name="sponsor_project" placeholder="Choose Project"><br>
        <a href="../projects/view.php" class="view-projects-btn">View Projects</a>

        <button type="submit">Submit Sponsorship</button>
    </form>

    
</div>

</body>
</html>
