<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - PixelWebStudio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>


    .text-container {
        max-width: 600px;
        margin: auto;
    }

    .hidden-text {
        display: none;
    }

    p {
            text-align: justify;
            line-height: 1.8;
        }

    .show-more-btn {
        display: block;
        margin-top: 10px;
        padding: 8px 15px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .show-more-btn:hover {
        background-color: #0056b3;
    }
</style>

</head>

<body class="index-page" dir="rtl">

 <?php include_once 'include/header.php'; ?>

  <main class="main">

    <?php include_once 'include/welcome.php'; ?>    

    <?php include_once 'include/about.php'; ?>


    <?php include_once 'include/services.php'; ?>


    <?php include_once 'include/portfolio.php'; ?>
    

    <?php include_once 'include/price.php'; ?>

    
    <?php include_once 'include/team.php'; ?>

    
    <?php include_once 'include/contact.php'; ?>


  </main>

  
  <?php include_once 'include/footer.php'; ?>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        var extraText = document.getElementById("extraText");
        extraText.style.display = "none"; // اطمینان از مخفی بودن متن اضافی در ابتدا
    });

    function toggleText() {
        var extraText = document.getElementById("extraText");
        var button = document.getElementById("toggleButton");

        if (extraText.style.display === "none") {
            extraText.style.display = "block";
            button.textContent = "نمایش کمتر";
        } else {
            extraText.style.display = "none";
            button.textContent = "نمایش بیشتر";
        }
    }
  </script>

</body>

</html>