<!DOCTYPE html>
<html>
<head>
    <title>Action Allies</title>
    <style>
        /* Full homepage background */
        body.home-bg {
            background-image: url('elements/background/index.png');
            background-size: contain;       
            background-position: center;    
            background-repeat: no-repeat;   
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;    
            align-items: center;            
            text-align: center;
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(2, 250px); /* 2 buttons per row */
            gap: 20px;
            margin-top: 200px; /* position control */
        }

        /* Center the last button */
        .button-container a:last-child {
            grid-column: span 2;
            justify-self: center;
        }

        /* Button base style */
        .button-container a {
            display: block;
            padding: 15px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #fff;
            transition: opacity 0.3s;
        }

        /* Button colors */
        .donate  { background-color: #28a745; } /* green */
        .sponsor { background-color: #007bff; } /* blue */
        .join    { background-color: #ffc107; color: #000; } /* yellow */

        .button-container a:hover {
            opacity: 0.85;
        }

        footer {
            margin-top: 60px;
            font-size: 14px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }
    </style>
</head>

<body class="home-bg">

<div class="button-container">
    <a href="donation/donate.php" class="donate">Donate</a>
    <a href="sponsorship/sponsor.php" class="sponsor">Become a Sponsor</a>

    <a href="projects/view.php" class="donate">View Projects</a>
    <a href="members/view.php" class="sponsor">View Members</a>

    <a href="joinAA/join.php" class="join">Be an Ally!</a>
</div>

<footer>
    <p>&copy; 2025 Action Allies. All Rights Reserved.</p>
</footer>

</body>
</html>
