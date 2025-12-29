<?php
session_start();

$_SESSION['first_name']  = $_POST['first_name'];
$_SESSION['middle_name'] = $_POST['middle_name'] ?? '';
$_SESSION['last_name']   = $_POST['last_name'];
$_SESSION['dob']         = $_POST['dob'];
$_SESSION['email']       = $_POST['email'];
$_SESSION['phone']       = $_POST['phone'];
$_SESSION['address']     = $_POST['address'];

header("Location: signup2.php");
exit;
