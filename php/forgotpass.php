<?php
include 'db.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $new_password = trim($_POST['password']);

    // Check if any field is empty
    if (empty($email) || empty($phone_number) || empty($new_password)) {
        echo "<script>alert('All fields are required!'); window.location.href='../Main_Pages/forgotpass.html';</script>";
        exit();
    }

    // Check if the email & phone number exist in the database
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ? AND phone_number = ?");
    $stmt->bind_param("ss", $email, $phone_number);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();

        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the password in the database
        $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
        $update_stmt->bind_param("ss", $hashed_password, $email);

        if ($update_stmt->execute()) {
            echo "<script>alert('Password reset successful! You can now log in.'); window.location.href='../Main_Pages/login.html';</script>";
        } else {
            echo "<script>alert('Error updating password! Please try again.'); window.location.href='../Main_Pages/forgotpass.html';</script>";
        }
        $update_stmt->close();
    } else {
        echo "<script>alert('Invalid email or phone number!'); window.location.href='../Main_Pages/forgotpass.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
