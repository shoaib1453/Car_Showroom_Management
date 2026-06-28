<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Showroom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Style_css/privterm.css" rel="stylesheet">
  <link href="../Style_css/super.css" rel="stylesheet">
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body>
    <header>
    <img src="../Images/logo1.jpg" alt="Hyundai Logo" class="logo-img">
    <div class="logo">Hyundai Car Showroom</div>
      <nav>
      <a href="Home.php">Home</a>
      <a href="expl.php">Cars</a>
      <a href="About.php">About Us</a>
      <a href="Car regestration.php">Car Registration</a>
      <a href="contact.php">Contact Us</a>
      <a href="../php/logout.php" class="btn btn-danger" onclick="confirmLogout(event)">Logout</a>
      </nav>
  </header>
  <main>
    <section>
        <h2>Introduction</h2>
        <p>Welcome to Hyundai Showroom. We value your trust and are committed to protecting your privacy by safeguarding your personal information.</p>
    </section>
    <section>
        <h2>Information We Collect</h2>
        <p>We collect information such as your name, contact details, and preferences when you interact with us via our website, showroom, or other communication channels.</p>
    </section>
    <section>
        <h2>How We Use Your Information</h2>
        <p>Your information helps us provide personalized services, communicate important updates, and enhance your experience with our showroom.</p>
    </section>
    <section>
        <h2>How We Share Your Information</h2>
        <p>We do not sell your data. We may share it with trusted service providers to assist in delivering services, subject to strict confidentiality agreements.</p>
    </section>
    <section>
        <h2>Data Security</h2>
        <p>We implement advanced security measures to protect your data from unauthorized access, alteration, or disclosure.</p>
    </section>
    <section>
        <h2>Your Privacy Rights</h2>
        <p>You can request access to, update, or delete your personal data. Contact us to exercise these rights or for assistance.</p>
    </section>
    <section>
        <h2>Changes to This Policy</h2>
        <p>We may update this policy periodically to reflect changes in our practices. Please check this page regularly for updates.</p>
    </section>
    <section>
        <h2>Contact Information</h2>
        <p>If you have any questions or concerns, feel free to reach us at <a href="contact.php">contactus.com</a> or call us at +91-99607 79889.</p>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="privacypoli.php">Privacy Policy</a> | <a href="termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/logout.js"></script>

</body>
</html>