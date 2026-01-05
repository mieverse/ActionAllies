<?php
include "../dbconnects.php";   

if (isset($_POST['feedback'])) {

    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    if ($email === "") {
        $email = NULL;
    }

    $sql = "INSERT INTO feedbacks (Email, Feedback) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ss", $email, $feedback);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: fb.php?success=1");
        exit();
    } else {
        echo "Database error. Feedback not submitted.";
    }
}
?>
