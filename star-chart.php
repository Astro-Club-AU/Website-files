<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cosmic Planisphere</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  
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
  <link href="assets/css/star.css" rel="stylesheet">


</head>

<body style="overflow-x: hidden;">
    <!-- ======= Header ======= -->
    <?php include('header.php'); ?>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center" style="text-align: center;">
            <h2 style="color: gray">Cosmic Planisphere for 10°N to 15°N</h2>

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Cosmic Planisphere</li>
            </ol>
            </div>

        </div>
        </section>
        <!-- End Blog Section -->

        <section class="star-sec">
            <div class="row">
                <!-- Button Holder -->
                <div class="col-lg-12 text-center">
                    <button type="button" class="btn star-btn btn-danger" onclick="left_slow(event)" >Rotate Slow : Left</button>
                    <button type="button" class="btn star-btn btn-primary" onclick="right_slow(event)">Rotate Slow : Right</button>
                    <button  type="button" class="btn star-btn btn-success" onclick="left_fast(event)">Rotate Fast : Left</button>
                    <button type="button" class="btn star-btn btn-dark" onclick="right_fast(event)">Rotate Fast : Right</button>
                </div>
                <!--Image Holders -->
                <div class="col-lg-12 text-center parent">
                    <img src="assets/img/star-chart/Star wheel.png" class="img-responsive center under dial">   
                    <img src="assets/img/star-chart/holder_10N_en_new1.png" class="img-responsive center over">
                </div>
                
            </div>
        </section>
    
    </main> <!--End of main -->


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
  <script src="assets/js/main.js"></script>
  <script src="assets/js/star-map.js"></script>

  <script src="assets/js/red.js"></script>

    <script>
    $(document).ready(function() {
        $('li.active').removeClass('active');
        $('a[href=""]').closest('li').addClass('active');
        console.log(location.pathname);
    });
    var filter = localStorage.filter;
    if(filter) {
      document.getElementsByTagName('html')[0].style.filter = filter;
    }
    </script>
 
</body>

</html>