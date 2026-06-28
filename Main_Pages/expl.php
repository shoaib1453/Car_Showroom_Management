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
  <link href="../Style_css/cars.css" rel="stylesheet">
  <link href="../Style_css/super.css" rel="stylesheet">
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body>

  <!-- Header -->
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

  <!-- Welcome Section -->
  <div class="container">
    <div class="text-center text-white py-4">    
      <h1>Welcome To Our Hyundai Car Showroom</h1>
      <p><h4>Find Your Hyundai Car</h4></p>
    </div>
    
    <div class="row">
      <!-- Car 1 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/eon.jpg" alt="Car 1" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai eon</h5>
            <p class="card-text">Hatchback</p>
            <a href="../Car detail/cardet1.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <!-- Car 2 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/i10.jpg" alt="Car 2" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai i10</h5>
            <p class="card-text">City Car</p>
            <a href="../Car detail/cardet2.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <!-- Car 3 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/i20.jpg" alt="Car 3" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai i20</h5>
            <p class="card-text">Premium Hatchback</p>
            <a href="../Car detail/cardet3.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>
    </div>
    <p></p>
    <div class="row">
      <!-- Car 4 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/Aura.jpg" alt="Car 4" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai Aura</h5>
            <p class="card-text">Compact Sedan</p>
            <a href="../Car detail/cardet4.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <!-- Car 5 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/Verna.jpg" alt="Car 5" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai Verna</h5>
            <p class="card-text">High-performance Coupe</p>
            <a href="../Car detail/cardet5.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <!-- Car 6 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/Elantra.jpg" alt="Car 6" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai Elantra</h5>
            <p class="card-text">Spacious and versatile Sedan</p>
            <a href="../Car detail/cardet6.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>
    </div>
    <p></p>

    <div class="row">
      <!-- Car 7 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/venue.jpg" alt="Car 7" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai Venue</h5>
            <p class="card-text">Compact SUV</p>
            <a href="../Car detail/cardet7.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <!-- Car 8 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/creta.jpg" alt="Car 8" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <p class="card-text">Versatile SUV</p>
            <a href="../Car detail/cardet8.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>

      <!-- Car 9 -->
      <div class="col-4 reveal">
        <div class="card">
          <img src="../carimg/alcazar.jpg" alt="Car 9" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Hyundai Alcazar</h5>
            <p class="card-text">Premium SUV</p>
            <a href="../Car detail/cardet9.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <p></p>

  <script src="../Main_js/logout.js"></script>

  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="privacypoli.php">Privacy Policy</a> | <a href="termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../Main_js/cars.js">
   
  </script>
</body>
</html>
