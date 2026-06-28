<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../Main_Pages/login.html"); // Redirect to login page if not logged in
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
  <link href="../Style_css/cardet.css" rel="stylesheet"> 
  <link href="../Style_css/logo.css" rel="stylesheet">
</head>
<body style="background-image: url('back2.jpg'); background-size: cover; background-repeat: no-repeat;">
  <header>
  <img src="../Images/logo1.jpg" alt="Hyundai Logo" class="logo-img">
  <div class="logo">Hyundai Car Showroom</div>
    <nav>
    <a href="../Main_Pages/Home.php">Home</a>
          <a href="../Main_Pages/expl.php" class="active">Cars</a>
          <a href="../Main_Pages/About.php">About Us</a>
          <a href="../Main_Pages/Car regestration.php">Car Registration</a>
          <a href="../Main_Pages/contact.php">Contact Us</a>
          <a href="../php/logout.php" class="btn btn-danger" onclick="confirmLogout(event)">Logout</a>
    </nav>
  </header>

  <section class="car-details reveal">
    <img src="../carimg/Aura.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai Aura</strong></h2>
        <p><strong>Price:</strong> $10,00,000</p>
        <p><strong>Mileage in Petrol:</strong> 28 to 29 km/l </p>
        <p><strong>Mileage in CNG:</strong> 33.5 to 35 km/kg </p>
        <p><strong>Fuel Type:</strong> Petrol & CNG</p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai Aura is a compact sedan that offers a stylish design, comfortable interior, and efficient performance, with both petrol and CNG variants delivering impressive fuel economy.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
  </section>

  <div class="container reveal">
    <p>The Hyundai Aura is a compact sedan that combines modern design, practicality, and efficiency, making it a popular choice in the entry-level sedan segment. With its sleek exterior, well-designed cabin, and advanced features, including a touchscreen infotainment system, connected car technology, and safety features like dual airbags and ABS, the Aura offers both comfort and convenience. The car is available in both petrol and CNG variants, with the petrol model offering a mileage of around 28 to 29 km/l, while the CNG variant provides an impressive 33.5 to 35 km/kg, making it a highly economical option. The Aura's refined performance, spacious interior, and affordability make it a strong contender for those seeking a reliable and fuel-efficient sedan for daily use.
    <div><h1>Visit Our Showroom For More Details!!!</h1></div>
    </p>
  </div>
  
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="../Main_Pages/privacypoli.php">Privacy Policy</a> | <a href="../Main_Pages/termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/script.js"></script>
  <script src="../Main_js/logout.js"></script>
</body>
</html>
