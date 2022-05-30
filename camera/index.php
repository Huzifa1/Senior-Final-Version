<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cameras</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/TOicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  </br></br></br></br>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
	
		<?php 
				if(isset($_SESSION['block'])){
					require_once "code1.php";?>
				   <nav id="navbar" class="navbar">
					<ul>
					  <li><a href="index.php" class="active">Home</a></li>
					  <li><a href="../manage data (admin)/index.php">Manage Data</a></li>
					  <li><a href="../camera/index.php">See Cameras</a></li>
					  <li><a href="../report/index.php">Write a Report</a></li>
					  <?php  require_once "code2.php"; ?>	
					  <li><a href="../logout/logout.php">Log out</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				  </nav>
	  
		<?php } else { ?>
					<h1 class="logo me-auto"><a href="index.php">Prison</a></h1>
					 <nav id="navbar" class="navbar">
					<ul>
					  <li><a href="../manager/index.php" class="active">Home</a></li>
					  <li><a href="../manage data (manager)/index.php">Manage Data</a></li>
					  <li><a href="../logout/logout.php">Log out</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				  </nav><!-- .navbar -->
	  <?php } ?>
	  
    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">


    <!-- #main -->

  <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Security Cameras</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-A">Block A</li>
              <li data-filter=".filter-B">Block B</li>
              <li data-filter=".filter-C">Block C</li>
              <li data-filter=".filter-D">Block D</li>
              <li data-filter=".filter-sports">Sports Zones</li>
              <li data-filter=".filter-kitchen">Kitchen Zones</li>




            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-A">
            <video muted autoplay width="100%" height="100%" controls loop> <source src="assets/vid/A1.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM A-1</b></p>
              <a href="assets/vid/A1.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-A">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/A2.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM A-2</b></p>
              <a href="assets/vid/A2.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-A">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/A3.mp4" type="video/mp4">
              your browser does not support the video.
            </video>

            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM A-3</b></p>
              <a href="assets/vid/A3.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-B" style="margin-top: 2%">
            <video muted autoplay width="100%" height="100%" controls loop> <source src="assets/vid/B1.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM B-1</b></p>
              <a href="assets/vid/B1.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-B" style="">
            <video muted autoplay width="350" height="260" id="videoElement" class="videoElement">

            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM B-2</b></p>
              <a href="webcam.html" class="preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-B" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/B3.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM B-3</b></p>
              <a href="assets/vid/B3.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-C" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/C1.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM C-1</b></p>
              <a href="assets/vid/C1.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-C" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/C2.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM C-2</b></p>
              <a href="assets/vid/C2.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-C" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/A1.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM C-3</b></p>
              <a href="assets/vid/A1.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-D" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/D1.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM D-1</b></p>
              <a href="assets/vid/D1.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-D" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/A2.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM D-2</b></p>
              <a href="assets/vid/A2.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-D" style="margin-top: 2%">
            <video muted autoplay width="100%" height="100%" controls loop> <source src="assets/vid/B3.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM D-3</b></p>
              <a href="assets/vid/B3.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sports" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/PG1.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM S-1</b></p>
              <a href="assets/vid/PG1.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sports" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/PG2.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM S-2</b></p>
              <a href="assets/vid/PG2.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sports" style="margin-top: 2%">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/PG3.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM S-3</b></p>
              <a href="assets/vid/PG3.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

   

          <div class="col-lg-4 col-md-6 portfolio-item filter-kitchen">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/K1.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM K-1</b></p>
              <a href="assets/vid/K1.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kitchen">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/K2.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM K-2</b></p>
              <a href="assets/vid/K2.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kitchen">
            <video muted autoplay width="100%"height="100%" controls loop> <source src="assets/vid/K3.mp4" type="video/mp4">
              your browser does not support the video.
            </video>
            <div class="portfolio-info" style=" top: 100%;">
              <p><b>CAM K-3</b></p>
              <a href="assets/vid/K3.mp4" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maximize"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section>

    
  
  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    let video = document.querySelector("#videoElement");

    if(navigator.mediaDevices.getUserMedia){
      navigator.mediaDevices.getUserMedia({video:true}).then(function(stream){
        video.srcObject = stream;
      })
      .catch (function(error){
        console.log("Something went wrong!");
      })
    } else {
      console.log("getUserMedia not supported!");
    }


  </script>
</body>

</html>