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
    <img src="../carimg/eon.jpg" alt="Car Image">
    <div class="car-info">
        <h2>Car Model Name: <strong>Hyundai EON</strong></h2>
        <p><strong>Price:</strong> $4,73,000</p>
        <p><strong>Mileage in Petrol:</strong> 20.3 to 22 km/l </p>
        <p><strong>Mileage in CNG:</strong> 30 to 32 km/kg </p>
        <p><strong>Fuel Type:</strong> Petrol & CNG</p>
        <p><strong>Transmission:</strong> Manual </p>
        <p><strong>Description:</strong> The Hyundai Eon is a compact hatchback that was produced by Hyundai primarily for emerging markets, including India. Known for its affordability and efficient design, it catered to urban commuters seeking a budget-friendly vehicle.</p>
        <a href="../Main_Pages/TestDrive.php"><button>Schedule a Test Drive</button></a>
    </div>
  </section>
  
    <div class="container reveal">
    <p>The Hyundai Eon was a popular entry-level hatchback introduced in India in 2011, aimed at budget-conscious urban buyers seeking an affordable yet stylish car. It featured Hyundai's signature "Fluidic Sculpture" design, giving it a modern and appealing look compared to its competitors in the segment. The Eon was powered by two petrol engine options: a 0.8-liter iRDE engine producing 55 bhp and a more powerful 1.0-liter Kappa engine generating 68 bhp. Both engines were paired with a 5-speed manual transmission. Known for its impressive fuel efficiency, the Eon offered mileage figures of up to 21 km/l, making it an economical choice for daily commutes.<Div><h1>Visit Our Showroom For More Details!!!</h1></Div>
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