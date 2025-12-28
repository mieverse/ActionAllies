<?php
include '../dbconnects.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name   = $_POST['donor_name'] ?? '';
    $email  = $_POST['donor_email'] ?? '';
    $amount = $_POST['amount'] ?? 0;
    $method = $_POST['payment_method'] ?? '';

    if ($amount <= 0) {
        exit("Invalid donation amount");
    }


    $result = mysqli_query($conn, "SELECT Donor_ID FROM donors ORDER BY Donor_ID DESC LIMIT 1");

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastId = $row['Donor_ID'];          // e.g. DNR001
        $num = (int) substr($lastId, 3) + 1;
    } else {
        $num = 1;
    }

    $donor_id = 'DNR' . str_pad($num, 3, '0', STR_PAD_LEFT);


    $sql = "INSERT INTO donors
            (Donor_ID, Donor_Name, Donor_Email, Amount, Pay_method)
            VALUES ('$donor_id', '$name', '$email', '$amount', '$method')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Thank you for your donation!</h2>";
        echo "<p>Your Donor ID: <strong>$donor_id</strong></p>";
        echo "<a href='donate.php'>Donate again</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
