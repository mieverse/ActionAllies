<?php
session_start();


$conn = mysqli_connect("localhost", "root", "", "project370");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $member_id   = $_POST['member_id'];
    $member_name = $_POST['member_name'];
    $department  = $_POST['department'];

    $sql = "INSERT INTO validmembers (member_id, member_name, department)
            VALUES ('$member_id', '$member_name', '$department')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Member added successfully!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
</head>

<body>
<style>
    body {
        background-image: url('../elements/background/any.png');
        background-size: cover;
        background-position: center;
        font-family: Arial, sans-serif;
        margin: 0;
        height: 100vh;             
        display: flex;             
        justify-content: center;  
        align-items: center; 
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .form-container {
        background: #fff;
        padding: 20px 25px;
        width: 350px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    input {
        width: 90%;
        padding: 8px;
        margin: 6px 0;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    button {
        padding: 8px 18px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        margin-top: 8px;
    }

    button:hover { opacity: 0.9; }

    .msg {
        margin-bottom: 10px;
        color: green;
        font-weight: bold;
    }

    .back-btn {
        display: inline-block;
        margin-top: 15px;
        padding: 7px 16px;
        background-color: #28a745;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
    }

    .back-btn:hover { opacity: 0.85; }
</style>

<div class="form-container">

    <?php if (isset($msg)) echo "<div class='msg'>$msg</div>"; ?>

    <form method="POST">
        <input type="text" name="member_id" placeholder="Member ID (e.g. GMB001)" required>
        <input type="text" name="member_name" placeholder="Member Name" required>
        <input type="text" name="department" placeholder="Department" required>

        <button type="submit">Add Member</button>
    </form>

    <a href="../viewmembers.php" class="back-btn">Back to Members</a>
</div>

</body>
</html>
