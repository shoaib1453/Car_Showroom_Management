<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $phone_number = $_POST['phone_number']; // Get phone number

    // Check if email already exists
    $checkEmail = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();

    if ($checkEmail->num_rows > 0) {
        echo "<script>alert('Error: Email already exists!'); window.location.href='../Main_Pages/signup.html';</script>";
    } else {
        // Insert user data
        $stmt = $conn->prepare("INSERT INTO users (email, password, phone_number) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $password, $phone_number);

        if ($stmt->execute()) {
            // Registration successful, redirect to login page
            header("Location: ../Main_Pages/login.html"); // Adjust path as needed 
            exit();
        } else {
            echo "<script>alert('Error: Something went wrong!'); window.location.href='../Main_Pages/signup.html';</script>";
        }
        $stmt->close();
    }

    $checkEmail->close();
    $conn->close();
}
?>
