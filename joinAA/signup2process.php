<?php
session_start();

$_SESSION['department'] = $_POST['department'];

header("Location: signup3.php");
exit;
