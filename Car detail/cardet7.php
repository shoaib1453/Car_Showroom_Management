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
  <link rel="stylesheet" href="../Style_css/cardet.css"> 
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
    <img src="../carimg/venue.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai Venue</strong></h2>
        <p><strong>Price:</strong> $13,00,000</p>
        <p><strong>Mileage in Petrol:</strong> 17 to 19 km/l </p>
        <p><strong>Fuel Type:</strong> Petrol </p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai Venue is a compact SUV that offers a stylish design, advanced features, and excellent performance, making it a popular choice for urban drivers seeking versatility and comfort.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
</section>
<div class="container reveal">
  <p>The Hyundai Venue is a compact SUV that combines modern design, advanced features, and practicality, making it a popular choice in the subcompact SUV segment. With its bold, sporty exterior and high ground clearance, the Venue offers a strong road presence while remaining compact enough for easy maneuverability in urban settings. Inside, it boasts a well-designed cabin with quality materials, comfortable seating, and a host of tech features such as a touchscreen infotainment system with Android Auto and Apple CarPlay, wireless charging, and connected car technology. The Venue is offered with multiple engine options, including a petrol and diesel engine, with the petrol variants delivering a mileage of around 17 to 19 km/l. Known for its smooth ride, excellent safety features, and compact size, the Hyundai Venue is an ideal choice for those looking for a versatile and feature-rich SUV that can handle both city and light off-road conditions.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
  </p></div>
  
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="../Main_Pages/privacypoli.php">Privacy Policy</a> | <a href="../Main_Pages/termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/script.js"></script>
  <script src="../Main_js/logout.js"></script>
</body>
</html>