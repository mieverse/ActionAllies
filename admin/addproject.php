<?php
session_start();
include "../dbconnects.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../viewprojects.php");
    exit();
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $project_id    = $_POST['project_id'];
    $project_name  = $_POST['project_name'];
    $start_date    = $_POST['start_date'];
    $end_date      = $_POST['end_date'];
    $status        = $_POST['status'];
    $collaborator  = $_POST['collaborator'];

    $sql = "INSERT INTO validprojects
            (project_id, project_name, start_date, end_date, status, collaborator)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "ssssss",
        $project_id,
        $project_name,
        $start_date,
        $end_date,
        $status,
        $collaborator
    );

    if (mysqli_stmt_execute($stmt)) {
        $msg = "Project added successfully!";
    } else {
        $msg = "Error: Project ID already exists.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Project</title>
    <style>
        body {
            background-image: url('../elements/background/any.png');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px;
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
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        input, select {
            width: 90%;
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 8px;
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

        button:hover {
            opacity: 0.9;
        }

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

        .back-btn:hover {
            opacity: 0.85;
        }
    </style>
</head>

<body>

<div class="form-container">

    <?php if ($msg): ?>
        <div class="msg"><?php echo $msg; ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="project_id" placeholder="Project ID (PRJ001)" required>
        <input type="text" name="project_name" placeholder="Project Name" required>

        <label>Start Date:</label>
        <input type="date" name="start_date" required>

        <label>End Date:</label>
        <input type="date" name="end_date">

        <input type="text" name="status" placeholder="Status (Ongoing/Completed)">
        <input type="text" name="collaborator" placeholder="Collaborator">

        <button type="submit">Add Project</button>
    </form>

    
    <a href="/project370/viewprojects.php" class="back-btn">Back to Project List</a>

</div>

</body>
</html>
