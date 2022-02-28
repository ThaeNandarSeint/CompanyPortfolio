<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
            <a href="contact.php" class="fw-bold text-decoration-none text-dark text-center text-white mx-3">Contact</a>
            <h1 class="fw-bold text-center text-white">Contact</h1>
        </div>
    </div>
    <!-- contact form -->
    <div>
        <h2 class="text-center">Stay in touch</h2>
        <p class="text-center">Just say hello or drop us a line. You can manually send us email on <a href="#" class="text-decoration-none fw-bold">example@mail.com</a></p>
        <form action="" class="mx-auto needs-validation" style="max-width: 50%;" novalidate>
            <div class="row mb-3">
                <div class="col-12 col-md-6 form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name.." required>
                    <div class="invalid-feedback">*require</div>
                </div>
                <div class="col-12 col-md-6 form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address.." required>
                    <div class="invalid-feedback">*require</div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject.." required>
                <div class="invalid-feedback">*require</div>
            </div>
            <div class="form-group mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Enter message.." required></textarea>
                <div class="invalid-feedback">*require</div>
            </div>
            <button type="submit" class="mb-5 btn btn-info px-5 text-light">Submit</button>
        </form>
    </div>
    <?php include "footer.php" ?>
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- from kit.fontawesome.com -->
    <script src="js/kit.fontawesome.js"></script>
    <!-- custom js -->
    <script src="js/validation.js"></script>
    <script src="js/up.js"></script>
    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>
</body>

</html>