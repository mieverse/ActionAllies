<?php
include '../config/dbconnects.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name   = $_POST['donor_name'];
    $email  = $_POST['donor_email'];
    $amount = $_POST['amount'];
    $method = $_POST['payment_method'];

    if ($amount <= 0) {
        echo "Invalid donation amount";
        exit();
    }

    $sql = "INSERT INTO donations 
            (donor_name, donor_email, amount, payment_method)
            VALUES ('$name', '$email', '$amount', '$method')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Thank you for your donation!</h2>";
        echo "<a href='donate.php'>Donate again</a>";
    } else {
        echo "Error saving donation";
    }
}
?>
