<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="-1" />
  
  <title>APOD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link href="assets/img/astro1.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    @media screen and (max-width: 1199px) {
      .d-cus-none{
      display: none !important;
      /* visibility: hidden; */
      left: -9999px !important;
      }
      .d-lg-none{
        display: block !important;
      }
    }

  </style>

</head>

<body>

 <!-- ======= Header ======= -->
 <?php include('header.php'); ?>
  <!-- End Header -->
  <main id="main">
    <!-- ======= Our APOD Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
          <h2>Astronomical Events in 2022</h2>
            <ol>
              <li><a href="index1.php">Home</a></li>
              <li>Astronomical Events in 2022</li>
            </ol>
          </div>
        </div>
      </section><!-- End Our APOD Section -->
      <!-- <div class="container" style="text-align: center; margin-bottom: 10%">
      <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&showTitle=0&showTabs=1&src=c3dhZGVzaGJhbGFqZWUxM0BnbWFpbC5jb20&color=%23039BE5" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div> -->
    <div class="responsive-iframe-container small-container" style="margin-bottom:5%; text-align:center">
      

      <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&showTitle=0&showPrint=0&src=dGhlLmNvc21vcy4xNzI5QGdtYWlsLmNvbQ&color=%23039BE5"
        style="border-width:0" width="95%" height="600" frameborder="0" 
      scrolling="no"></iframe>
    </div>
  </main>

   <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->
  
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script><script src="assets/js/red.js"></script>
    <script>
        var filter = localStorage.filter;
      if(filter) {
        document.getElementsByTagName('html')[0].style.filter = filter;
      }
    </script>
  </body>
  
  </html>