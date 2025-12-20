<!DOCTYPE html>
<html>
<head>
    <title>Action Allies</title>
    <style>
        /* Full homepage background */
        body.home-bg {
            background-image: url('elements/background/index.png'); /* your homepage background */
            background-size: contain;       /* fits full image like donation/sponsor pages */
            background-position: center;    /* center the image */
            background-repeat: no-repeat;   /* no tiling */
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;    /* vertical alignment: start/top */
            align-items: center;            /* horizontal center */
            text-align: center;
        }

        h1 {
            font-size: 48px;
            margin-top: 50px;               /* adjust top spacing of heading */
            margin-bottom: 10px;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
        }

        p {
            font-size: 20px;
            margin-bottom: 40px;
            color: #fff;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 200px; /* <-- Adjust this value to move container up/down */
        }

        /* Buttons with original colors */
        .button-container a {
            display: block;
            width: 250px;
            padding: 15px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #fff;
            transition: opacity 0.3s;
        }

        .donate { background-color: #28a745; } /* green */
        .sponsor { background-color: #007bff; } /* blue */
        .join { background-color: #ffc107; color: #000; } /* yellow */

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
    <a href="joinAA/join.php" class="join">Be an Ally!</a>
</div>

<footer>
    <p>&copy; 2025 Action Allies. All Rights Reserved.</p>
</footer>

</body>
</html>
