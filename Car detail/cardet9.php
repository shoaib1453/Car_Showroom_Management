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
    <img src="../carimg/alcazar.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai Alcazar</strong></h2>
        <p><strong>Price:</strong> $21,55,000</p>
        <p><strong>Mileage in Petrol:</strong> 14 to 16 km/l </p>
        <p><strong>Fuel Type:</strong> Petrol </p>
        <p><strong>Transmission:</strong> Automatic </p>
        <p><strong>Description:</strong> The Hyundai Alcazar is a spacious and feature-rich 7-seater SUV that combines premium comfort, advanced technology, and powerful performance, making it an ideal choice for families seeking a versatile and stylish vehicle.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
</section>
<div class="container reveal">
  <p>The Hyundai Alcazar is a premium 7-seater SUV designed to offer a perfect blend of luxury, comfort, and performance. With its bold and sophisticated exterior design, the Alcazar makes a strong statement on the road, while its spacious and well-appointed interior provides ample legroom and high-quality materials for a premium feel. The cabin is equipped with advanced features like a touchscreen infotainment system, wireless charging, a panoramic sunroof, and a host of safety features such as multiple airbags, ABS with EBD, and rear parking sensors. Available in both petrol and diesel variants, the Alcazar delivers a mileage of around 14 to 16 km/l for the petrol variant and 18 to 20 km/l for the diesel variant. Known for its smooth ride, refined handling, and versatility, the Hyundai Alcazar is an ideal choice for families who need both space and luxury in a stylish, feature-packed SUV.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
  </p></div>
  
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="../Main_Pages/privacypoli.php">Privacy Policy</a> | <a href="../Main_Pages/termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/script.js"></script>
  <script src="../Main_js/logout.js"></script>
</body>
</html>