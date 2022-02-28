<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <!-- banner -->
    <div class="mb-5" style="position: relative;">
        <img src="Images/Slider 3.jpg" alt="" style="width: 100%; height: 70vh; object-fit: cover; filter: brightness(70%); opacity: 0.8;">
        <div class="" style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <a href="index.php" class="fw-bold text-decoration-none text-dark text-center text-white mx-3">Home</a>
            <span class="text-white"> &#8226</span>
            <a href="about.php" class="fw-bold text-decoration-none text-dark text-center text-white mx-3">About</a>
            <h1 class="fw-bold text-center text-white">About</h1>
        </div>
    </div>
    <!-- about -->
    <?php
    include "about.view.php";
    include "clients.php";
    include "footer.php";
    ?>
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- from kit.fontawesome.com -->
    <script src="js/kit.fontawesome.js"></script>
    <!-- custom js -->
    <script src="js/validation.js"></script>
    <script src="js/up.js"></script>
</body>

</html>