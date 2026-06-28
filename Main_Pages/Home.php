<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('You must log in first!'); window.location.href='login.html';</script>";
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
  <link href="../Style_css/home.css" rel="stylesheet">
  <link href="../Style_css/super.css" rel="stylesheet">
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <header>
  <img src="../Images/logo1.jpg" alt="Hyundai Logo" class="logo-img">
    <div class="logo">Hyundai Car Showroom</div>
    <nav>
      <a href="Home.php" class="active">Home</a>
      <a href="expl.php">Cars</a>
      <a href="About.php">About Us</a>
      <a href="Car regestration.php">Car Registration</a>
      <a href="contact.php">Contact Us</a>
      <a href="../php/logout.php" class="btn btn-danger" onclick="confirmLogout(event)">Logout</a>


    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero reveal">
    <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="../Images/Lambo1.jpg" class="d-block w-100" alt="Car 1">
          <div class="carousel-caption">
            <h1>Welcome To Our Hyundai Car Showroom</h1>
            <p>Discover a wide range of cars tailored to your needs with unmatched service and expertise.</p>
            <a href="expl.php" class="btn btn-primary btn-lg mt-3">Explore More</a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="../Images/supra.jpg" class="d-block w-100" alt="Car 2">
          <div class="carousel-caption">
            <h1>Find Your Dream Car Today</h1>
            <p>Experience the thrill of driving with our latest car models.</p>
            <a href="About.php" class="btn btn-primary btn-lg mt-3">Explore More</a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="../Images/elantraN.jpg" class="d-block w-100" alt="Car 3">
          <div class="carousel-caption">
            <h1>Unmatched Quality and Service</h1>
            <p>Providing you with exceptional service and guidance.</p>
            <a href="Car regestration.php" class="btn btn-primary btn-lg mt-3">Explore More</a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="../Images/aura.jpg" class="d-block w-100" alt="Car 3">
          <div class="carousel-caption">
            <h1>Contact Us and Familiarize With Cars</h1>
            <p>Attaching everyone with true heart & honest trust with each and every car</p>
            <a href="contact.php" class="btn btn-primary btn-lg mt-3">Explore More</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-5 reveal">
    <div class="container">
      <h2 class="text-center mb-4">Why Choose Us?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card p-4">
            <h4>Wide Range of Cars</h4>
            <p>Choose from a variety of premium and budget-friendly cars to suit your preferences.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card p-4">
            <h4>Financing Options</h4>
            <p>Enjoy flexible financing and EMI options to make your dream car affordable.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card p-4">
            <h4>Expert Guidance</h4>
            <p>Our experienced team is here to assist you in selecting the perfect car for your needs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <!-- Services Section -->
  <section id="services" class="py-5 bg-light reveal">
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <h5>Car Sales</h5>
          <p>Offering a range of new and pre-owned vehicles with exceptional deals and packages.</p>
        </div>
        <div class="col-md-6">
          <h5>Car Servicing</h5>
          <p>Get top-notch maintenance and servicing by our certified professionals.</p>
        </div>
        <div class="col-md-6">
          <h5>Test Drives</h5>
          <p>Schedule a test drive to experience the performance and comfort of your desired car.</p>
        </div>
        <div class="col-md-6">
          <h5>Insurance Assistance</h5>
          <p>Hassle-free car insurance solutions to keep you protected on the road.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="privacypoli.php">Privacy Policy</a> | <a href="termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../Main_js/home.js"></script>
  <script src="../Main_js/logout.js"></script>


</body>
</html>
