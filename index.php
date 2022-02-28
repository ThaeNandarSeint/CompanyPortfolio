<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="mb-5" style="position: relative;">
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/Slider 1.jpg" class="d-block w-100" alt="..." style="height: 80vh; width: 100%; object-fit: cover; filter: brightness(70%);">
        </div>
        <div class="carousel-item">
          <img src="Images/Slider 2.jpg" class="d-block w-100" alt="..." style="height: 80vh; width: 100%; object-fit: cover; filter: brightness(70%);">
        </div>
        <div class="carousel-item">
          <img src="Images/Slider 3.jpg" class="d-block w-100" alt="..." style="height: 80vh; width: 100%; object-fit: cover; filter: brightness(70%);">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon btn btn-info" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon btn btn-info" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="" style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
      <p class="fw-bold text-center text-white">We're Design Studio Believe In Ideas</p>
      <h1 class="fw-bold text-center text-white">Creative Design</h1>
      <div class="mt-4 d-flex justify-content-center">
        <a href="services.php" class="px-4 btn btn-outline-light fw-bold">Get Started</a>
      </div>
    </div>
  </div>
  <!-- about -->
  <?php
  include "about.view.php";
  include "service.view.php";
  ?>
  <div class="mx-auto" style="width: 85%;">
    <small>Projects</small>
    <div class="d-flex justify-content-between mb-4">
      <h2>Our Latest Projects</h2>
      <a href="projects.php" class="btn btn-outline-info">Browse Projects <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
  <?php include "projects.view.php"; ?>
  <div class="container-fluid bg-light d-flex align-items-center mt-2" style="height: 100px;">
    <?php include "clients.php" ?>
  </div>
  <?php include "footer.php" ?>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- from kit.fontawesome.com -->
  <script src="js/kit.fontawesome.js"></script>
  <!-- custom js -->
  <script src="js/validation.js"></script>
  <script src="js/up.js"></script>
</body>

</html>