<?php
  require_once('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="-1" />
  
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

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php'); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Our Events Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Events</h2>
          <ol>
            <li><a href="index1.php">Home</a></li>
            <li>Our Events</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Upcoming Events Section ======= -->
    <section class="services">
      <div class="container">
        <div class="section-title">
          <h2>Upcoming Events</h2>
        </div>
        <div class="justify-content-center row">
          <?php
              if($result = mysqli_query($con,"SELECT * FROM upcoming_events")){
                $rowcount=mysqli_num_rows($result);
              }
              $delay = 0;
              while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $name = $row['Name'];
                $desc = $row['Description'];
                $img_name = $row['Image_name'];
                // echo $img_name;
                $path = "assets/img/upcoming_events/".$img_name;
                echo '<div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay='.$delay.'>
                <div class="icon-box icon-box-cyan">
                  <div><img src='.$path.' class="event-picture"></div>
                  <h4 class="title"><a href="">'.$name.'</a></h4>
                  <p class="description">'.$desc.'</p>
                </div>
              </div> ';
              $delay = $delay + 100;
              }


          ?>
          


        </div>

      </div>
    </section><!-- End Events Section -->


    <!-- ======= Events Details Section ======= -->
    <section class="service-details">
      <div class="container">
        <div class="section-title">
          <h2>Completed Events</h2>
        </div>
        <div class="justify-content-center row">

          <?php
            if($result = mysqli_query($con,"SELECT * FROM completed_events order by Date DESC")){
              $rowcount=mysqli_num_rows($result);
            }
            $id = 0;
            while($row = mysqli_fetch_array($result)){
              $id = $row['id'];
              $name = $row['Name'];
              $desc = $row['Description'];
              $img_name = $row['Image_name'];

              $path = "assets/img/completed_events/".$img_name;
              $result_post = substr(strip_tags($desc), 0, 60)." .....";
              echo '<div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src='.$path.' alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">'.$name.'</a></h5>
                  <p class="card-text">'.$result_post.'</p>
                  <div class="read-more"><a href="#Completed" data-toggle="modal" data-target="#Completed'.$id.'"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div> 
            
            <div class="modal fade" id="Completed'.$id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" >
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h3 class="modal-title w-100"  id="exampleModalLongTitle">'.$name.'</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class = "row">
                    <div class="col-md-12 justify-content-center" style="text-align:center"><img src='.$path.' alt="..." style="width:95%;padding-bottom:2%"></div>
                    <div class="col-md-11 mx-auto "><pre class="break">'.$desc.'</pre></div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
            
            
            
            ';    
            }
            
          ?>
         
        </div> 

      </div>
      <!-- Modal -->




    </section>
    <!-- End Service Details Section -->

    


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
  <script src="assets/js/main.js"></script>
  <script src="assets/js/events.js"></script>
  <script type="text/javascript" src="assets/js/red.js"></script>

   <script>
    $(document).ready(function() {
      $('li.active').removeClass('active');
      $('a[href="' + 'events.php' + '"]').closest('li').addClass('active');
      console.log(location.pathname);
    });
    var filter = localStorage.filter;
    if(filter) {
      document.getElementsByTagName('html')[0].style.filter = filter;
    }
  </script>
</body>

</html>