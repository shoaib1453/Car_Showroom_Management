<?php
// Include database connection
include 'db.php';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ownerName = $conn->real_escape_string($_POST['ownerName']);
    $contactNumber = $conn->real_escape_string($_POST['contactNumber']);
    $email = $conn->real_escape_string($_POST['email']);
    $carModel = $conn->real_escape_string($_POST['carModel']);
    $preferredDate = $conn->real_escape_string($_POST['preferredDate']);
    $preferredTime = $conn->real_escape_string($_POST['preferredTime']);
    $address = $conn->real_escape_string($_POST['Address']);

    // Insert data into the database
    $sql = "INSERT INTO test_drive (owner_name, contact_number, email, car_model, preferred_date, preferred_time, address)
            VALUES ('$ownerName', '$contactNumber', '$email', '$carModel', '$preferredDate', '$preferredTime', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Test drive booking successful!'); window.location.href='../Main_Pages/Home.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.history.back();</script>";
    }
}

$conn->close();
?>
