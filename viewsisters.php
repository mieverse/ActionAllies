<?php
session_start();
include "dbconnects.php";

$isAdmin = (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');

$result = mysqli_query($conn, "SELECT * FROM validsisters");
?>

<!DOCTYPE html>
<html>
<head>
    <title>SisterNGOs</title>

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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td { padding: 12px; border: 1px solid #ccc; }

        th { background-color: #007bff; color: #fff; }

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
<h2>Our Sister NGOs</h2>

<table>
    <tr>
        <th>SisterNGO ID</th>
        <th>SisterNGO Name</th>
        <th>Collabed Project</th>

    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $row['sister_id']; ?></td>
        <td><?php echo $row['sister_name']; ?></td>
        <td><?php echo $row['collab_project']; ?></td>

    </tr>
    <?php endwhile; ?>
</table>

<a href="index.php" class="back-btn">Back to Home</a>
</body>
</html>
