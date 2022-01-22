<?php
  require_once('db_connect.php');
  $contents = "";
  $title = "";
  $aid=1;
  $bid = 0;


?>
<!DOCTYPE html>
<html lang="en" id="red">

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

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index1.php">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row justify-content-start">
          <div class="col-lg-4" >
            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>
              </div>
              <!-- End sidebar search formn -->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul id="entries-flters">
                  <li data-filter="*" class="efilter-active">All Posts</li>
                
                  <!-- Categories -->
                  <?php
                      $sqlc = "SELECT * FROM category";
                      $result = $con->query($sqlc);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                             $i = $row['cat-id'];
                            $cn = strtok($row['cat-name'], " ");
                            echo " <li data-filter='.".$cn.$i."'>".$row['cat-name']."</li>";
                        }
                      } else {
                          echo "0 results";
                      } 
                
                ?>

                </ul>

              </div>
              <!-- End sidebar categories-->

              </div>
              <!-- End sidebar-->

              

            </div>
            <!-- End sidebar -->

   
          <div class="col-lg-8 entries">


          <?php
          if($result = mysqli_query($con,"SELECT * FROM blog order by date desc")){
            $rowcount=mysqli_num_rows($result);
          }
          while($row = mysqli_fetch_array($result)){
            $aid = $row['auth-id'];
            $title = $row['title'] ;
            $contents = $row['content'];
            $date = $row['date'];
            $bid = $row['blog-id'];
            $cid = $row['cat-id'];
            $cat_img = $row['Image_name'];  

            $sql = "SELECT * from blogsters where id = $aid ";
            $result1 = mysqli_query($con,$sql);
            $desc = "";
            $name = "";
            while($row = mysqli_fetch_array($result1)){
              $name =  $row['auth-name'];
              $desc = $row['Description'];
            }

            $sqlca = "SELECT * from category where `cat-id` = $cid";
            $resultc = mysqli_query($con,$sqlca);
            $cname = "";
            
            while($row = mysqli_fetch_array($resultc)){
              $cname = $row['cat-name'];
            }
            $cn = strtok($cname, " ").$cid;

            
            $cat_img="assets/img/blog-headers/".$cat_img;


            $result_post = substr(strip_tags(substr($contents, strpos($contents,"</style>"),1000)),0,300)." .....";
           echo '<article class="entry '.$cn.'">

              <div class="entry-img" style="text-align:center">
                <img src='.$cat_img.' alt="" class="img-fluid" width=80%>
              </div>

              <h2 class="entry-title">
                <a href="blog-single.php?blog='.$bid.'">'.$title.'</a>
              </h2>
              
              <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.php?blog='.$bid.'">'.$name.'</a></li>
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.php?blog='.$bid.'"><time datetime="2020-01-01">'.$date.'</time></a></li>
            </ul>
          </div>
          <div class="entry-content">
            <p>'.$result_post.'</p>
            <div class="read-more">
              <a href="blog-single.php?blog='.$bid.'">Read More</a>
            </div>
          </div>  
        </article>';
            // <!-- End blog entry -->
            } ?>

          </div><!-- End blog entries list -->

      

        </div><!-- End .row -->

      </div><!-- End .container -->

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
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/red.js"></script>
  <script>
    $(document).ready(function() {
      $('li.active').removeClass('active');
      $('a[href="' + 'blog.php' + '"]').closest('li').addClass('active');
      console.log(location.pathname);
    });
    var filter = localStorage.filter;
    if(filter) {
      document.getElementsByTagName('html')[0].style.filter = filter;
    }
  </script>

</body>

</html>