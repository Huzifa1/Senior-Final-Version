

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Prisoner</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
	
     <!-- From -->
		
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../myassets/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <?php  require_once "code3.php"; ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php" class="active">Main Page</a></li>
		      <li class="dropdown"><a href="#"><span>Select Action</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="../../report/index.php">Write a Report</a></li>
            <li><a href="../index.php">Main Page</a></li>
			<li><a href="../addprisoner/whichblock.php">Add Prisoner</a></li>
            <li><a href="../addstaff/addstaff.php">Add Staff</a></li>
            <li><a href="../search/search.php">Search</a></li>
            </ul>
          </li>
          <li><a href="../../camera/index.php">See Cameras</a></li>
          <li><a href="../../admin/index.php">See Requests</a></li>
		       <?php  require_once "code4.php"; ?>		 
          <li><a href="../../logout/logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


        <div class="carousel-item active" style="background-image: url(../assets/img/office.jpg)">
          <div class="carousel-container">
            <div class="container">
              <?php require_once "fillform.php"; ?>
            <!-- Form -->
            </br>
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <div class="card">
                            <h5 class="text-center mb-4">Edit Prisoner</h5>
                            <form method="post" action="<?php  echo 'code1.php?id='.$id.'&block='.$block; ?>" class="form-card" onsubmit="return Validate()">
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" value="<?php  echo $fullname[0]; ?>" name="fname" onblur="validate(1)" required> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" value="<?php  echo $fullname[1]; ?>" name="lname" onblur="validate(2)" required> </div>
                                    
                                </div>
                                <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Age<span class="text-danger"> *</span></label> <input type="number" id="lname" name="age" value="<?php  echo $selectrow['age']; ?>" onblur="validate(2)" required> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Crime<span class="text-danger"> *</span></label>
                                    <select class="form-select" id="email" name="crime" aria-label="Default select example" style="height:45px;">
                                        <option value="Burglary" <?=$selectrow['crime']=='Burglary'?'selected="selected"':'';?> >Burglary</option>
                                        <option value="Bankruptcy" <?=$selectrow['crime']=='Bankruptcy'?'selected="selected"':'';?> >Bankruptcy</option>
                                        <option value="Manslaughter" <?=$selectrow['crime']=='Manslaughter'?'selected="selected"':'';?> >Manslaughter</option>
                                        <option value="Money Fraud" <?=$selectrow['crime']=='Money Fraud'?'selected="selected"':'';?> >Money fraud</option>
										<option value="Domestic Violence" <?=$selectrow['crime']=='Domestic Violence'?'selected="selected"':'';?> >Domestic Violence</option>
                                        <option value="Elder Abuse and Neglect" <?=$selectrow['crime']=='Elder Abuse and Neglect'?'selected="selected"':'';?> >Elder Abuse and Neglect</option>
                                        <option value="Cyber crime and online fraud" <?=$selectrow['crime']=='Cyber crime and online fraud'?'selected="selected"':'';?> >Cyber crime and online fraud</option>
										<option value="Arson" <?=$selectrow['crime']=='Arson'?'selected="selected"':'';?> >Arson</option>
                                        <option value="Unliscensed work" <?=$selectrow['crime']=='Unliscensed work'?'selected="selected"':'';?> >Unliscensed work</option>
                                        <option value="Drunk driving" <?=$selectrow['crime']=='Drunk driving'?'selected="selected"':'';?> >Drunk driving</option>
										<option value="Drug Addiction" <?=$selectrow['crime']=='Drug Addiction'?'selected="selected"':'';?> >Drug Addiction</option>
                                    </select> 
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" style="margin:0px 5px 5px 0px">Cell Number<span class="text-danger"> *</span></label>
                                    <select class="form-select" id="email" name="cell" aria-label="Default select example" style="height:45px;">
                                      <?php require_once "code5.php"; ?>
                                    </select> 
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Duration<span class="text-danger"> *</span></label> <input type="number" name="duration" placeholder="In months" value="<?php  echo $selectrow['duration']; ?>" onblur="validate(4)" required> </div>
                                </div>
                                <div class="row justify-content-end">
                                   <div class="form-group col-sm-6"> <button type="button" class="btn-block btn-primary" onclick="back()">Change Block</button> </div>
                                    <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


			<!-- End From -->

			</div>
          </div>
        </div>
    </div>
	
  </section>
  
  <!-- End Hero -->

<!-- Form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../myassets/script.js"></script>
    
    <script>
      function back() {
        window.location.replace("<?php  echo 'whichblock.php?id='.$id; ?>");
       }

    </script>
         <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>