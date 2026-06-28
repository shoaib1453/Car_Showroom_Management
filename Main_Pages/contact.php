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
  <link href="../Style_css/contact.css" rel="stylesheet">
  <link href="../Style_css/super.css" rel="stylesheet">
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body style="background-image: url('../Images/backgro.jpg'); background-size: cover; background-repeat: no-repeat;" onload="revealElements()">
    <header>
    <img src="../Images/logo1.jpg" alt="Hyundai Logo" class="logo-img">
    <div class="logo">Hyundai Car Showroom</div>
      <nav>
      <a href="Home.php">Home</a>
      <a href="expl.php">Cars</a>
      <a href="About.php">About Us</a>
      <a href="Car regestration.php">Car Registration</a>
      <a href="contact.php" class="active">Contact Us</a>
      <a href="../php/logout.php" class="btn btn-danger" onclick="confirmLogout(event)">Logout</a>
      </nav>
    </header>
    
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5">
          <div class="address-container fade-in">
            <h3 style="font-size: 40px;">Address:</h3>
            <address>
              Near PVR theater,<br>
              In front of Vespa / Aprilia showroom,<br>
              Barshi Road, <br>
              Latur, <br>
              Pin-413512, <br>
              Maharashtra, <br>
              Contact Number: 9960779889, <br>
              Email: <a href="#" style="color: white; text-decoration: none;">hyundaishowroom@gmail.com</a>
            </address>
          </div>
        </div>
        <div class="col-md-7">
          <div class="contact-form fade-in">
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">Have questions or need assistance? Reach out to us today!</p>
            <form action="../php/contact_user.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container text-center mt-5 map-container fade-in" style="color: white;">
      <h2><b>Map Location:</b></h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2012.794692453245!2d76.54546809918912!3d18.409562527448962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf8157133ce687%3A0x2a3217bd116bcff!2sJaya%20-%20Hyundai%20Service%20latur!5e1!3m2!1sen!2sin!4v1739374451009!5m2!1sen!2sin" width="100%" height="400" style="border:0; margin-top: 20px; border-radius: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><br>

    <script src="../Main_js/logout.js"></script>
    
    <footer>
      <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
      <p><a href="privacypoli.html">Privacy Policy</a> | <a href="termsofservice.html">Terms of Service</a></p>
    </footer>

    <script src="../Main_js/cont.js"></script>
</body>
</html>
