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
    <img src="../carimg/i20.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai i20</strong></h2>
        <p><strong>Price:</strong> $8,00,000</p>
        <p><strong>Mileage in Petrol:</strong> 18 to 20 km/l </p>
        <p><strong>Mileage in CNG:</strong> 25 to 28 km/kg </p>
        <p><strong>Fuel Type:</strong> Petrol & CNG</p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai i20 is a premium hatchback known for its stylish design, spacious interior, and efficient performance, offering both petrol and CNG variants that provide good fuel economy and advanced features.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
</section>
<div class="container reveal">
  <p>The Hyundai i20 is a premium hatchback that has become a popular choice for those seeking a blend of style, performance, and practicality. Known for its modern design and refined features, the i20 offers a spacious and comfortable interior, with ample legroom and a well-designed cabin equipped with modern technology, including a touchscreen infotainment system, Bluetooth connectivity, and advanced safety features like airbags and ABS. The i20 comes with both petrol and CNG engine options, with the petrol variants delivering a mileage of around 18 to 20 km/l and the CNG variants offering approximately 25 to 28 km/kg. Its smooth driving experience, combined with a stylish exterior, makes the Hyundai i20 a strong contender in the competitive premium hatchback segment, appealing to those looking for a reliable, fuel-efficient, and feature-packed vehicle for daily driving.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
  </p></div>
  
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="../Main_Pages/privacypoli.php">Privacy Policy</a> | <a href="../Main_Pages/termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/script.js"></script>
  <script src="../Main_js/logout.js"></script>

</body>
</html>