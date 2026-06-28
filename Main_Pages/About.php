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
  <title>Car Showroom - About Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Style_css/about.css" rel="stylesheet">
  <link href="../Style_css/super.css" rel="stylesheet">
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
      <img src="../Images/logo1.jpg" alt="Hyundai Logo" class="logo-img">
      <div class="logo" style="font-size: 16px;">Hyundai Car Showroom</div>
      <nav>
        <a href="Home.php">Home</a>
        <a href="expl.php">Cars</a>
        <a href="About.php" class="active">About Us</a>
        <a href="Car regestration.php">Car Registration</a>
        <a href="contact.php">Contact Us</a>
        <a href="../php/logout.php" class="btn btn-danger" onclick="confirmLogout(event)">Logout</a>
      </nav>
    </header>

    <!-- About Us Content -->
    <div class="container" id="content">
      <h1>About Us</h1>
      <p>Welcome to <b>Hyundai Showroom</b>, where our passion for excellence and love for automobiles drive everything we do. Located in the heart of Lautr city, we have been serving car enthusiasts and buyers for over <b>10 years</b>.</p>
      <p>We offer a wide range of vehicles, from luxury brands to budget-friendly options, ensuring that there is something for everyone. Our team of dedicated professionals is here to guide you through the process of finding the perfect car.</p>
      
      <h2>Why Choose Us?</h2>
      <ul>
        <li>A wide variety of cars from leading brands</li>
        <li>Competitive financing options</li>
        <li>Friendly and knowledgeable staff</li>
        <li>Top-notch after-sales support</li>
      </ul>

      <!-- Team Section -->
      <h2>Meet Our Team</h2>
      <div class="team">
          <div class="team-member">
              <img src="../Showroom_Members/Arsalan.jpg" alt="Arsalan">
              <h3>Shaikh Arsalan</h3>
              <p>Founder & CEO</p>
          </div>
          <div class="team-member">
              <img src="../Showroom_Members/shoaib.jpg" alt="Shoaib">
              <h3>Maniyar Shoaib</h3>
              <p>Senior Manager & Sales Manager</p>
          </div>
          <div class="team-member">
              <img src="../Showroom_Members/customer support.jpg" alt="Pavan">
              <h3>Sooryavanshi Pavan</h3>
              <p>Customer Support</p>
          </div>
          <div class="team-member">
              <img src="../Showroom_Members/lucky-baskhar-1600x900.jpg" alt="Bhaskar">
              <h3>Bhaskar Kumar</h3>
              <p>Finance Advisor</p>
          </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
      <p><a href="privacypoli.php">Privacy Policy</a> | <a href="termsofservice.php">Terms of Service</a></p>
    </footer>

    <script src="../Main_js/about.js"></script>
    <script src="../Main_js/logout.js"></script>

</body>
</html>
