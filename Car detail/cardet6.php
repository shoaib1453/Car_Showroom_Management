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
    <img src="../carimg/Elantra.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai Elantra</strong></h2>
        <p><strong>Price:</strong> $20,00,000</p>
        <p><strong>Mileage in Petrol:</strong> 14 to 16 km/l </p>
        <p><strong>Mileage in CNG:</strong> 20 to 22 km/kg </p>
        <p><strong>Fuel Type:</strong> Petrol & CNG</p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai Elantra is a stylish and sophisticated sedan that offers a smooth driving experience, advanced features, and a comfortable interior, making it a popular choice for those seeking a premium car with excellent performance.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
</section>
<div class="container reveal">
  <p>The Hyundai Elantra is a sleek and modern sedan that offers a perfect blend of style, performance, and comfort. With its bold exterior design, featuring sharp lines and a wide stance, the Elantra stands out in the compact sedan segment. Inside, it offers a premium, well-crafted cabin with high-quality materials, spacious seating, and advanced features such as a touchscreen infotainment system, wireless charging, and a range of safety technologies, including multiple airbags, ABS with EBD, and lane-keeping assist. The Elantra is available with both petrol and diesel engine options, delivering a mileage of approximately 14 to 16 km/l for petrol and offering a smooth, efficient driving experience. Known for its refined ride quality and handling, the Elantra is ideal for those looking for a sophisticated and feature-packed sedan that combines style, efficiency, and technology.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
  </p></div>
  
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="../Main_Pages/privacypoli.php">Privacy Policy</a> | <a href="../Main_Pages/termsofservice.php">Terms of Service</a></p>
  </footer>
  <script src="../Main_js/script.js"></script>
  <script src="../Main_js/logout.js"></script>
</body>
</html>