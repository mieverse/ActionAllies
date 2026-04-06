<?php
session_start();
include "dbconnects.php";


$isAdmin = (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');


$query = "SELECT * FROM validprojects";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Projects</title>
    <style>
        body {
            background-image: url('elements/background/any.png');
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
            text-align: center;
        }
        h2 { margin-bottom: 30px; }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td { padding: 12px; border: 1px solid #ccc; }
        th { background-color: #17a2b8; color: #fff; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .back-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        .back-btn:hover { opacity: 0.85; }
    </style>
</head>

<body>

<h2>Project List</h2>

<table>
    <tr>
        <th>Project ID</th>
        <th>Project Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>Collaborator</th>

    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $row['project_id']; ?></td>
        <td><?php echo $row['project_name']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
        <td><?php echo $row['end_date']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><?php echo $row['collaborator']; ?></td>


    </tr>
    <?php endwhile; ?>
</table>

<a href="index.php" class="back-btn">Back to Home</a>

</body>
</html>
