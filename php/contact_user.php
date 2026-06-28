<?php
// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form values are received
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $message = $conn->real_escape_string($_POST['message']);

        // Debugging: Check if values are received
        if (empty($name) || empty($email) || empty($message)) {
            die("Error: Some fields are empty.");
        }

        // Insert data into the database
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Message sent successfully!'); window.location.href='../Main_Pages/Home.php';</script>";
        } else {
            die("Error inserting data: " . $conn->error);
        }
    } else {
        die("Error: Form fields are not set.");
    }
}

// Close connection
$conn->close();
?>
