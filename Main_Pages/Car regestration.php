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
  <link href="../Style_css/regestration.css" rel="stylesheet">
  <link href="../Style_css/super.css" rel="stylesheet">
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body style="background-image: url('../Images/img3.jpg'); background-size: cover; background-repeat: no-repeat;" onload="revealElements()">

  <header>
    <img src="../Images/logo1.jpg" alt="Hyundai Logo" class="logo-img">
    <div class="logo">Hyundai Car Showroom</div>
    <nav>
      <a href="Home.php">Home</a>
      <a href="expl.php">Cars</a>
      <a href="About.php">About Us</a>
      <a href="Car regestration.php" class="active">Car Registration</a>
      <a href="contact.php">Contact Us</a>
      <a href="../php/logout.php" class="btn btn-danger" onclick="confirmLogout(event)">Logout</a>
    </nav>
  </header>

  <div class="container fade-in">
    <h1><b><u>Register Your Hyundai Vehicle</u></b></h1><br>
    <form action="../php/regestration.php" method="POST">
      <label for="owner-name">Owner's Full Name</label>
      <input type="text" id="owner-name" name="ownerName" placeholder="Enter your full name" required>

      <label for="contact">Contact Number</label>
      <input type="tel" id="contact" name="contactNumber" placeholder="Enter your contact number" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="car-model">Car Model</label>
      <select type="text" id="car-model" name="carModel" required>
        <option>--Select Car--</option>
        <option value="EON">EON</option>
        <option value="i10">i10</option>
        <option value="i20">i20</option>
        <option value="Aura">Aura</option>
        <option value="Verna">Verna</option>
        <option value="Elantra">Elantra</option>
        <option value="Venue">Venue</option>
        <option value="Creta">Creta</option>
        <option value="Alcazar">Alcazar</option>
      </select>

      <label for="car-year">Year of Manufacture</label>
      <input type="number" id="car-year" name="carYear" placeholder="Enter year of manufacture" min="1900" max="2024" required>

      <label for="car-color">Car Color</label>
      <select type="text" id="car-color" name="carColor" required>
        <option>--Select Car Color--</option>
        <option value="White">White</option>
        <option value="Black">Black</option>
        <option value="Blue">Blue</option>
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Yellow">Yellow</option>
        <option value="Gray">Gray</option>
        <option value="Purple">Purple</option>
        <option value="Brown">Brown</option>
      </select>

      <label for="remarks">Additional Remarks</label>
      <textarea id="remarks" name="remarks" placeholder="Enter any additional details" rows="4"></textarea>

      <button type="submit">Submit Registration</button>
    </form>
  </div>
  <script src="../Main_js/logout.js"></script>

  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="privacypoli.php">Privacy Policy</a> | <a href="termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/regestration.js"></script>
</body>
</html>
