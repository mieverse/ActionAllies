<?php
session_start();
include "../dbconnects.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sister_id = $_POST['sister_id'];
    $sister_name = $_POST['sister_name'];
    $collab_project = $_POST['collab_project'];

    $sql = "INSERT INTO validsisters (sister_id, sister_name, collab_project)
            VALUES ('$sister_id', '$sister_name', '$collab_project')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Sister NGO added successfully!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Sister NGO</title>
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
        background-color: #17a2b8;
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

    <?php if ($msg != "") echo "<div class='msg'>$msg</div>"; ?>

    <form method="POST">
        <input type="text" name="sister_id" placeholder="SNG001" required>
        <input type="text" name="sister_name" placeholder="Sister NGO Name" required>
        <input type="text" name="collab_project" placeholder="Collabed Project">
        <button type="submit">Add Sister NGO</button>
    </form>

    <a href="../viewsisters.php" class="back-btn">Back to Sister NGOs</a>

</div>

</body>
</html>
