<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Showroom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Style_css/testdrive.css" rel="stylesheet">
  <link href="../Style_css/super.css" rel="stylesheet">
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body>
  <header>
  <img src="../Images/logo1.jpg" alt="Hyundai Logo" class="logo-img">
  <div class="logo">Hyundai Car Showroom</div>
    <nav>
      <a href="Home.php">Home</a>
      <a href="expl.php" class="active">Cars</a>
      <a href="About.php">About Us</a>
      <a href="Car regestration.php">Car Registration</a>
      <a href="contact.php">Contact Us</a>
      <a href="../php/logout.php" class="btn btn-danger" onclick="confirmLogout(event)">Logout</a>
    </nav>
  </header>

  <div class="container">
    <h1><b><u>Book Your Test Drive</u></b></h1><br>
    <form action="../php/test_drive.php" method="POST">
      <label for="owner-name">Owner's Full Name</label>
      <input type="text" id="owner-name" name="ownerName" placeholder="Enter your full name" required>

      <label for="contact">Contact Number</label>
      <input type="tel" id="contact" name="contactNumber" placeholder="Enter your contact number" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="car-model">Car Model</label>
      <select id="car-model" name="carModel" required>
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

      <label for="preferred-date">Preferred Date</label>
      <input type="date" id="preferred-date" name="preferredDate" required>

      <label for="preferred-time">Preferred Time</label>
      <input type="time" id="preferred-time" name="preferredTime" required>

      <label for="Address">Home Address</label>
      <textarea id="Address" name="Address" placeholder="Enter your Address" rows="4"></textarea>

      <button type="submit">Submit Registration</button>
    </form>
  </div>

  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="privacypoli.php">Privacy Policy</a> | <a href="termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/drive.js"></script>
  <script src="../Main_js/logout.js"></script>
</body>
</html>
