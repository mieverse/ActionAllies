<?php
include '../dbconnects.php';

if (($_SERVER["REQUEST_METHOD"] === "POST")) {


    $sponsor_name    = $_POST['sponsor_name'] ?? '';
    $sponsor_email   = $_POST['sponsor_email'] ?? '';
    $sponsor_project = $_POST['sponsor_project'] ?? '';


    $result = mysqli_query($conn, "SELECT Sponsor_ID FROM sponsors ORDER BY Sponsor_ID DESC LIMIT 1");


    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastId = $row['Sponsor_ID'];
        $num = (int) substr($lastId, 3) + 1;
    } else {
        $num = 1;
    }


    $Sponsor_ID = 'SPR' . str_pad($num, 3, '0', STR_PAD_LEFT);


    $sql = "INSERT INTO sponsors
            (Sponsor_ID, Sponsor_Name, Sponsor_Email, Sponsor_Project)
            VALUES ('$Sponsor_ID', '$sponsor_name', '$sponsor_email', '$sponsor_project')";


    if (mysqli_query($conn, $sql)) {
        echo "<h2>Thank you for your sponsorship!</h2>";
        echo "<p>Your Sponsor ID: <strong>$Sponsor_ID</strong></p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

