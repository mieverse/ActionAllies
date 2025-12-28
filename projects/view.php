<!DOCTYPE html>
<html>
<head>
    <title>View Projects</title>
    <style>
        body {
            background-image: url('../elements/background/any.png');
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #17a2b8;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

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

        .back-btn:hover {
            opacity: 0.85;
        }
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

    <!-- Dummy rows -->
    <tr>
        <td>1</td>
        <td>Clean Water Initiative</td>
        <td>2025-01-01</td>
        <td>2025-06-30</td>
        <td>Ongoing</td>
        <td>Sister One</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Education for All</td>
        <td>2024-03-01</td>
        <td>2024-12-31</td>
        <td>Completed</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Tree Plantation Drive</td>
        <td>2025-02-15</td>
        <td>2025-07-15</td>
        <td>Ongoing</td>
    </tr>

</table>

<a href="../index.php" class="back-btn">Back to Home</a>

</body>
</html>
