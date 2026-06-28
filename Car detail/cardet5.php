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
    <img src="../carimg/Verna.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai Verna</strong></h2>
        <p><strong>Price:</strong> $18,00,000</p>
        <p><strong>Mileage in Petrol:</strong>  17 to 19 km/l </p>
        <p><strong>Mileage in CNG:</strong>  25 to 30 km/kg </p>
        <p><strong>Fuel Type:</strong> Petrol & CNG</p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai Verna is a stylish and feature-packed sedan that offers a comfortable ride, advanced technology, and impressive fuel efficiency, making it a popular choice for those seeking a premium yet affordable car.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
</section>
<div class="container reveal">
  <p>The Hyundai Verna is a premium sedan that combines elegance, performance, and advanced technology, making it a standout in its segment. With its sleek and modern design, the Verna boasts a spacious and well-equipped interior, featuring a touchscreen infotainment system, automatic climate control, and premium upholstery, providing both comfort and convenience for its occupants. The car is offered with both petrol and diesel engine options, with the petrol variants delivering a mileage of approximately 17 to 19 km/l, making it a fuel-efficient choice for long drives and city commutes. The Verna also stands out for its smooth handling, refined performance, and safety features, including multiple airbags, ABS with EBD, and rear parking sensors. Whether for daily commuting or long trips, the Hyundai Verna offers a balanced blend of style, efficiency, and technology, making it a popular choice among sedan buyers.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
  </p></div>
  
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="../Main_Pages/privacypoli.php">Privacy Policy</a> | <a href="../Main_Pages/termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/script.js"></script>
  <script src="../Main_js/logout.js"></script>

</body>
</html>