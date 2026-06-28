<?php
// Include database connection
include 'db.php';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ownerName = $conn->real_escape_string($_POST['ownerName']);
    $contactNumber = $conn->real_escape_string($_POST['contactNumber']);
    $email = $conn->real_escape_string($_POST['email']);
    $carModel = $conn->real_escape_string($_POST['carModel']);
    $carYear = intval($_POST['carYear']);
    $carColor = $conn->real_escape_string($_POST['carColor']);
    $remarks = $conn->real_escape_string($_POST['remarks']);

    // Insert data into the database
    $sql = "INSERT INTO car_registration (owner_name, contact_number, email, car_model, car_year, car_color, remarks)
            VALUES ('$ownerName', '$contactNumber', '$email', '$carModel', $carYear, '$carColor', '$remarks')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Car registration successful!'); window.location.href='../Main_Pages/Home.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.history.back();</script>";
    }
}

$conn->close();
?>
