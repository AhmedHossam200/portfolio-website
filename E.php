<?php

  include 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>paper</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .topicButton {
    font-family: Arial;
    text-align: center;
    display: inline-block;
    width: 36px;
    height: 12px;
    color: white;
    /*vertical-align: text-top;*/
    margin: 1px 0 2px;
    font-size: 11px;
}
    </style>

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Ahmed Moustafa</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
           <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
         
          <li><a href="book.php" class="nav-link scrollto"><i class="bi bi-book"></i> <span>Books</span></a></li>
          <li><a href="paper.php" class="nav-link scrollto"><i class="bi bi-file-text"></i> <span>Papers</span></a></li>
          <li><a href="tech.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Teaching</span></a></li> 
            <li><a href="collaborations.php" class="nav-link scrollto"><i class="bi bi-arrow-left-right"></i> <span>Collaborations</span></a></li>
            <li><a href="personal.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Personal</span></a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    

    <!-- ======= Portfolio Details Section ======= -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" style="padding:50px ">

        <div class="section-title">
          <h2>Machine Learning</h2>
<!--          <p>For a list of my publications, please click here.-->
<!--<br>-->
<!--For a PDF of any of my articles, please email me on-->
<!--<br>-->
<!--a.moustafa AT westernsydney.edu.au Or ahmed.a.moustafa AT gmail.com</p>-->
        </div>

        <div class="row"style="padding:20px">
      <table border="0" cellpadding="10" cellspacing="12" class="publications">

			<tbody>
                <tr>
                    <!--<td colspan="2"><span class=""><br>Machine Learning papers</span></td>-->
                </tr>
                <br>
                <br>
                  <?php
             $sql = 'SELECT * FROM paper where name="ML" order by year desc  ';
            $statement = $connection->prepare($sql);
            $statement->execute();
              $people = $statement->fetchAll(PDO::FETCH_OBJ);
                 ?>
            
             <?php foreach($people as $person): ?>
                <tr>
                <td align="right" valign="top">
                     <?php if ($person->name == "E" ) {?>
		<a href="foundation.php"><span title="<?= $person->id; ?>---Experimental" class="topicButton" style="background-color:#92040b">E</span></a>
	                  <?php  }
                  
                    else if($person->name == "CM"){?>
                    <a href="p.php"><span title="<?= $person->id; ?>---computational modeling" class="topicButton" style="background-color:#fd7823">CM</span></a>
                     <?php  }
                    else if($person->name == "ML"){?>
                    <a href="E.php"><span title="<?= $person->id; ?>---Machine Learning" class="topicButton" style="background-color:#fda128">ML</span></a>
	                   <?php   }?>
                    
                <br>
                </td>
                    <td valign="top">
                    <span class="default">
                         <!--&nbsp;-->
                        <?= $person->description; ?>
                    </span>
                    </td>
                    <!--<br>-->
                    <!--<br>-->
                    <!--<br>-->
                    <!--<br>-->
                    <!--<br>-->
                    
            
                  
                </tr>
                
                          <?php endforeach; ?> 

		</tbody></table>
      
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
          <strong><span></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
           <p> </p>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>