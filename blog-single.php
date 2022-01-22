<?php
    require_once('db_connect.php');
    $bid_get = $_GET['blog'];
    $result = mysqli_query($con,"SELECT * FROM `blog` WHERE `blog-id` = $bid_get");
    $contents = "";
    $title = "";
    $aid=1;
    $bid = 0;
    $cid = 0;
    $date = '2020-01-01';
    $cat_img = "";
    while($row = mysqli_fetch_array($result)){
      $aid = $row['auth-id'];
        $title = $row['title'] ;
        $contents = $row['content'];
        $date = $row['date'];
        $cid = $row['cat-id']   ;
        $cat_img = $row['Image_name'];
    }
    $sql = "SELECT * from blogsters where id = $aid";
    $result = mysqli_query($con,$sql);
    $desc = "";
    $name = "";
    while($row = mysqli_fetch_array($result)){
      $name =  $row['auth-name'];
      $desc = $row['Description'];
    }
    
    $cat_img="assets/img/blog-headers/".$cat_img;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="-1" />
  
  <title>Blog</title>
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
  <link  rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

</head>

<body>

   <!-- ======= Header ======= -->
   <?php include('header.php'); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center" >
          <h2 style="color: gray; font-family: 'Roboto',sans-serif;">Blog</h2>

          <ol>
            <li style="color: gray; font-family: 'Roboto',sans-serif;" ><a href="index1.php">Home</a></li>
            <li style="color: gray; font-family: 'Roboto',sans-serif;"><a href="blog.php">Blog</a></li>
            <li style="color: gray; font-family: 'Roboto',sans-serif;"><?php echo $title ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
      <div class="container">

        <div class="row">

          <div class="col-md-10">

            <article class="entry entry-single">
              <div class="entry-img" style="text-align: center;">
                <img src=<?php echo $cat_img;?> alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php?blog=<?php echo $bid_get;?>">
                <?php
                echo $title;
              ?>
                </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.php?blog=<?php echo $bid_get;?>"><?php echo $name; ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.php?blog=<?php echo $bid_get;?>"><time datetime="2020-01-01"><?php echo $date; ?></time></a></li>
                </ul>
              </div>

              <div class="entry-content col-md-12">
              <?php
                echo $contents;
              ?>

              </div>

              <!-- <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>

                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div> -->

            </article><!-- End blog entry -->

            <div class="blog-author clearfix">
              <img src="assets/img/blog-author_male.png" class=" float-left" alt="">
                  <h4> <?php 
                    

                    echo $name;
                  
                  
                  ?> </h4>
               
              <div class="social-links">
                <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
              </div>
              <p>
                <?php echo $desc; ?>
              </p>
            </div><!-- End blog author bio -->



          </div><!-- End blog entries list -->

        </div><!-- End row -->

      </div><!-- End container -->

    </section><!-- End Blog Section -->

  </main><!-- End #main -->

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
    $(document).ready(function() {
      $('li.active').removeClass('active');
      $('a[href="' + '/blog.php' + '"]').closest('li').addClass('active');
      console.log(location.pathname);
    });
    var filter = localStorage.filter;
    if(filter) {
      document.getElementsByTagName('html')[0].style.filter = filter;
    }
  </script>
</body>

</html>