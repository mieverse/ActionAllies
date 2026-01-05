<?php
session_start();
/* Protect admin page */
if (!isset($_SESSION['DLead_ID'])) {
    header("Location: ../login/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Action Allies</title>
<style>
* { box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }

body.home-bg {
    margin: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-image: url('../elements/background/any.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.button-container {
    display: grid;
    grid-template-columns: 250px;
    gap: 20px;
    margin-top: 200px;
}

.button-container a {
    width: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    text-align: center;
    transition: opacity 0.3s;
}

.editm { background-color: #28a745; }
.editp { background-color: #007bff; }
.logout-btn { background-color: #dc3545; }

.button-container a:hover { opacity: 0.9; }

footer {
    margin-top: auto;
    padding: 15px 0;
    font-size: 14px;
    color: #fff;
    text-align: center;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}
</style>
</head>

<body class="home-bg">
<div class="button-container">
    <a href="addproject.php" class="editp">Edit Project List</a>
    <a href="addmember.php" class="editm">Edit Member List</a>

    <!-- NEW BUTTON (added above logout) -->
    <a href="addsister.php" class="editp">Add Collaborators</a>

    <a href="../login/logout.php" class="logout-btn">Logout</a>
</div>

<footer>
&copy; 2025 Action Allies. All Rights Reserved.
</footer>
</body>
</html>
