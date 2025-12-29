<?php
session_start();
include "../dbconnects.php";

$motivation = $_POST['motivation'];

$stmt = $conn->prepare("
INSERT INTO new_members
(first_name, middle_name, last_name, dob, email, phone, address, department, motivation)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "sssssssss",
    $_SESSION['first_name'],
    $_SESSION['middle_name'],
    $_SESSION['last_name'],
    $_SESSION['dob'],
    $_SESSION['email'],
    $_SESSION['phone'],
    $_SESSION['address'],
    $_SESSION['department'],
    $motivation
);

$stmt->execute();

$stmt->close();
$conn->close();

session_destroy();
header("Location: success.php");
exit;
