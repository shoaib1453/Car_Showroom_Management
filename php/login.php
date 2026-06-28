<?php
session_start();
include 'db.php'; // Ensure database connection is included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        if (!empty($email) && !empty($password)) {
            $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
            if (!$stmt) {
                die("SQL Error: " . $conn->error); // Debug SQL error
            }

            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($hashed_password);
                $stmt->fetch();

                if (password_verify($password, $hashed_password)) {
                    $_SESSION["email"] = $email;

                    $stmt->close();
                    $conn->close();

                    // ✅ Redirect to home page after successful login
                    header("Location: ../Main_Pages/Home.php");
                    exit();
                } else {
                    echo "<script>alert('Invalid password! Try again.'); window.location.href='../Main_Pages/login.html';</script>";
                    exit();
                }
            } else {
                echo "<script>alert('Email not found! Please sign up first.'); window.location.href='../Main_Pages/signup.html';</script>";
                exit();
            }
        } else {
            echo "<script>alert('Please fill in both email and password fields.'); window.location.href='../Main_Pages/login.html';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Invalid form submission.'); window.location.href='../Main_Pages/login.html';</script>";
        exit();
    }
}

$conn->close();
?>
