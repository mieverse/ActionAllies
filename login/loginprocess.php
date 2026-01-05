<?php
session_start();
include "../dbconnects.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['DLead_ID']);
    $password = trim($_POST['DLead_Pass']);

    $sql = "SELECT * FROM dptleads WHERE DLead_ID = ? AND DLead_Pass = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {

        $_SESSION['DLead_ID'] = $username;
        $_SESSION['role'] = 'admin';   // ⭐ THIS IS THE KEY LINE

        header("Location: ../admin/adminindex.php");
        exit();
    } else {
        echo "<script>
                alert('Invalid credentials');
                window.location.href='login.php';
              </script>";
    }
}
?>
