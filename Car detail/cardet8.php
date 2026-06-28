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
    <img src="../carimg/creta.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai Venue</strong></h2>
        <p><strong>Price:</strong> $20,30,000</p>
        <p><strong>Mileage in Petrol:</strong> 16 to 17 km/l </p>
        <p><strong>Fuel Type:</strong> Petrol </p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai Creta is a stylish and feature-packed compact SUV that offers a comfortable ride, advanced safety features, and impressive fuel efficiency, making it a popular choice for families and urban drivers alike.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
</section>
<div class="container reveal">
  <p>The Hyundai Creta is a highly popular compact SUV that stands out for its stylish design, premium features, and comfortable driving experience. With its bold, modern exterior and spacious interior, the Creta offers a high level of comfort and convenience for both city driving and long trips. The cabin is well-equipped with advanced features such as a touchscreen infotainment system with Android Auto and Apple CarPlay, premium upholstery, and a range of safety features like multiple airbags, ABS with EBD, and rear parking sensors. The Creta is available with both petrol and diesel engine options, with the petrol variants delivering a mileage of approximately 16 to 17 km/l and the diesel variants offering around 19 to 21 km/l. Known for its refined ride quality, smooth handling, and excellent fuel efficiency, the Hyundai Creta remains a top choice for those looking for a versatile and reliable SUV in the competitive compact SUV segment.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
  </p></div>
  
  <footer>
    <p>&copy; 2025 Hyundai Car Showroom. All Rights Reserved.</p>
    <p><a href="../Main_Pages/privacypoli.php">Privacy Policy</a> | <a href="../Main_Pages/termsofservice.php">Terms of Service</a></p>
  </footer>

  <script src="../Main_js/script.js"></script>
  <script src="../Main_js/logout.js"></script>
</body>
</html>