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
    <img src="../carimg/i10.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai i10</strong></h2>
        <p><strong>Price:</strong> $6,00,000</p>
        <p><strong>Mileage in Petrol:</strong> 18 to 20 km/l </p>
        <p><strong>Mileage in CNG:</strong> 26 to 28 km/kg </p>
        <p><strong>Fuel Type:</strong> Petrol & CNG</p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai i10 is a compact, fuel-efficient hatchback known for its stylish design, comfortable interior, and practicality, making it a popular choice for urban drivers and first-time car buyers.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
  </section>
  
  <div class="container reveal">
    <p>The Hyundai i10 is a compact hatchback that has been a popular choice in markets like India and several other countries due to its affordability, practicality, and efficient design. Launched in 2007, the i10 quickly gained popularity for its compact size, making it ideal for urban environments where maneuverability is key. The car offers a combination of comfort, style, and advanced features, making it a strong contender in the entry-level hatchback segment.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
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