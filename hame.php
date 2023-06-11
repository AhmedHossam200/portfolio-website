<?php
   session_start();
  include 'db_conn.php';
   
   
   if(isset($_POST['add_pyear'])){
      
       $year=(int)$_POST['year'];
      
      $query="INSERT INTO `year`( `year`) VALUES ( '$year')";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);
   }
   
   if(isset($_POST['update_paper'])){
      $name=$_POST['name'];
      $id=$_POST['id'];
      $description=$_POST['description'];
       $year=(int)$_POST['year'];
      
      $query="UPDATE `paper` SET `name`='$name',`description`='$description',`year`=$year WHERE id=$id";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);
   }

 if(isset($_POST['add_paper'])){
      $name=$_POST['name'];
      $description=$_POST['description'];
       $year=(int)$_POST['year'];
      
      $query="INSERT INTO `paper`(`name`, `description` , `year`) VALUES ('$name','$description' , '$year')";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);
      
      

     if($stmt){
         $num;
            $sql = "SELECT * FROM `c`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
         foreach($people2 as $person2):
         
         $num=$person2->num_1+1;
         endforeach;
         $query="UPDATE `c` SET num_1='$num' WHERE id=2 ";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/hame.php");
      $_SESSION['response']="Successfully Inserted to the database! ";
      $_SESSION['res_type']="success";
     }
          
      
      
      
  } 
if(isset($_POST['add_location'])){
      $name=$_POST['name'];
      $rigth=(int)$_POST['r']* -1;
    $left=(int)$_POST['l'];
    
      $query="INSERT INTO `map`( `l`, `r`, `name`) VALUES ('$left','$rigth','$name')";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);

     if($stmt){
            $num;
            $sql = "SELECT * FROM `c`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
         foreach($people2 as $person2):
         
         $num=$person2->num_2+1;
         endforeach;
         $query="UPDATE `c` SET num_2='$num' WHERE id=2 ";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/hame.php");
      $_SESSION['response']="Successfully Inserted to the database! ";
      $_SESSION['res_type']="success";
     }
          
      
      
      
  }
 if(isset($_POST['add_book'])){
      $name=$_POST['name'];
      $description=$_POST['d'];

      $photo=$_FILES['file_image']['name'];
      $upload="image/".$photo;
       
      $query="INSERT INTO `book`(`name`, `d`,`book_image`) VALUES ('$name','$description','$upload')";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);

      move_uploaded_file($_FILES['file_image']['tmp_name'],$upload);

     if($stmt){
            $num;
            $sql = "SELECT * FROM `c`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
         foreach($people2 as $person2):
         
         $num=$person2->num_3+1;
         endforeach;
         $query="UPDATE `c` SET num_3='$num' WHERE id=2 ";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/hame.php");
      $_SESSION['response']="Successfully Inserted to the database! ";
      $_SESSION['res_type']="success";
     }
          
      
      
      
  } 



if(isset($_POST['add_collab'])){
      $link=$_POST['collab_link'];
      $description=$_POST['collab_desc'];

      $photo=$_FILES['file_image']['name'];
      $upload="image/".$photo;
       
      $query="INSERT INTO `collaboration`(`collab_desc`, `collab_link`,`collab_img`) VALUES ('$description','$link','$upload')";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);

      move_uploaded_file($_FILES['file_image']['tmp_name'],$upload);

//     if($stmt){
//            $num;
//            $sql = "SELECT * FROM `c`";
//
//        $statement = $connection->prepare($sql);
//          $statement->execute([]);
//            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
//         foreach($people2 as $person2):
//         
//         $num=$person2->num_3+1;
//         endforeach;
//         $query="UPDATE `c` SET num_3='$num' WHERE id=2 ";
//     $stmt=$connection->prepare($query);
//      $stmt->execute([]);
//      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/hame.php");
//      $_SESSION['response']="Successfully Inserted to the database! ";
//      $_SESSION['res_type']="success";
//     }
          
      
      
      
  } 










if(isset($_POST['add_personal'])){
//      $link=$_POST['collab_link'];
      $description=$_POST['personal_desc'];

      $photo=$_FILES['file_image']['name'];
      $upload="image/".$photo;
       
      $query="INSERT INTO `personal`(`personal_desc`,`personal_img`) VALUES ('$description','$upload')";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);

      move_uploaded_file($_FILES['file_image']['tmp_name'],$upload);

//     if($stmt){
//            $num;
//            $sql = "SELECT * FROM `c`";
//
//        $statement = $connection->prepare($sql);
//          $statement->execute([]);
//            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
//         foreach($people2 as $person2):
//         
//         $num=$person2->num_3+1;
//         endforeach;
//         $query="UPDATE `c` SET num_3='$num' WHERE id=2 ";
//     $stmt=$connection->prepare($query);
//      $stmt->execute([]);
//      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/hame.php");
//      $_SESSION['response']="Successfully Inserted to the database! ";
//      $_SESSION['res_type']="success";
//     }
          
      
      
      
  } 































 if(isset($_POST['add_teach'])){
      $name=$_POST['name'];

      $photo=$_FILES['file_image']['name'];
      $upload="image/".$photo;
        
      $query="INSERT INTO `teach`(`name`, `teach_image`) VALUES ('$name','$upload')";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);

      move_uploaded_file($_FILES['file_image']['tmp_name'],$upload);

     if($stmt){
            $num;
            $sql = "SELECT * FROM `c`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
         foreach($people2 as $person2):
         
         $num=$person2->num_4+1;
         endforeach;
         $query="UPDATE `c` SET num_4='$num' WHERE id=2 ";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/hame.php");
      $_SESSION['response']="Successfully Inserted to the database! ";
      $_SESSION['res_type']="success";
     }
          
      
      
      
  }
  
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/images.png" rel="icon">
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
 
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <!--<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>-->

  <!-- ======= Header ======= -->
  <header id="header" >
    <div class="d-flex flex-column">

      <div class="profile">
        <img  src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light">Ahmed Moustafa</h1>
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

          <li><a href="hame.php" class="nav-link scrollto active"><i class="bi bi-file-text"></i> <span>Papers</span></a></li>
          <li><a href="admin_book.php" class="nav-link scrollto "><i class="bi bi-book"></i> <span>Books</span></a></li>
          <li><a href="admin_collab.php" class="nav-link scrollto"><i class="bi bi-arrow-left-right"></i> <span>Collaborations</span></a></li>
          <li><a href="admin_personal.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Personal</span></a></li>
          <li><a href="admin_teach.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Teaching</span></a></li> 
            
            
            
            

         
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Admin page</h2>
          <ol>
            <li><a href="login2.php">log-out</a></li>
            <li>Admin home</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div id="#p" class="col-lg-8">
              <section class="section-2 container-fluid p-0">
    <div class="container-fluid">

         <div class="row justify-contrnt-center" >
             <div class="col-md-10">
               
                 
             </div>
         </div>
         <!--<span class="smaller" align="right">View By Topic: -->
		<br>
                  <a ><b> Topics</b></a> 
		<br>
           <a > <span title="Experimental" class="topicButton" style="background-color:#92040b">E</span></a>
            <a>Experimental</a>
   
    <br>
    
    <a ><span title="computational modeling" class="topicButton" style="background-color:#fd7823">CM</span></a>
    <a >computational Modeling</a>
    
    <br>
    
    <a ><span title="Machine Learning" class="topicButton" style="background-color:#fda128">ML</span></a>
    <a >Machine Learning</a>
    
    <br>
    
<!--
    <a href="publications.php?topic=Causal Induction"><span title="Causal Induction" class="topicButton" style="background-color:#fecf2f">CI</span></a>
    <a href="publications.php?topic=Causal Induction">Causal Induction</a>
    
    <br>
    
    <a href="publications.php?topic=Cognitive Development"><span title="Cognitive Development" class="topicButton" style="background-color:#dae532">CD</span></a>
    <a href="publications.php?topic=Cognitive Development">Cognitive Development</a>
    
    <br>
    
    <a href="publications.php?topic=Probabilistic Reasoning"><span title="Probabilistic Reasoning" class="topicButton" style="background-color:#72d829">PR</span></a>
    <a href="publications.php?topic=Probabilistic Reasoning">Probabilistic Reasoning</a>
    
    <br>
    
    <a href="publications.php?topic=Rational Process Models"><span title="Rational Process Models" class="topicButton" style="background-color:#20c972">RPM</span></a>
    <a href="publications.php?topic=Rational Process Models">Rational Process Models</a>
    
    <br>
    
    <a href="publications.php?topic=Similarity and Categorization"><span title="Similarity and Categorization" class="topicButton" style="background-color:#21c9c8">S&amp;C</span></a>
    <a href="publications.php?topic=Similarity and Categorization">Similarity and Categorization</a>
    
    <br>
    
    <a href="publications.php?topic=Statistical Models of Language"><span title="Statistical Models of Language" class="topicButton" style="background-color:#093fc4">SML</span></a>
    <a href="publications.php?topic=Statistical Models of Language">Statistical Models of Language</a>
    
    <br>
    
    <a href="publications.php?topic=Nonparametric Bayesian Models"><span title="Nonparametric Bayesian Models" class="topicButton" style="background-color:#6515a1">NBM</span></a>
    <a href="publications.php?topic=Nonparametric Bayesian Models">Nonparametric Bayesian Models</a>
    
    <br>
    
    <a href="publications.php?topic=Cultural Evolution and Iterated Learning"><span title="Cultural Evolution and Iterated Learning" class="topicButton" style="background-color:#ca1dc0">CEIL</span></a>
    <a href="publications.php?topic=Cultural Evolution and Iterated Learning">Cultural Evolution and Iterated Learning</a>
    
    <br>
    
    <a href="publications.php?topic=Decision Making and Reinforcement Learning"><span title="Decision Making and Reinforcement Learning" class="topicButton" style="background-color:#fb87f1">DMRL</span></a>
    <a href="publications.php?topic=Decision Making and Reinforcement Learning">Decision Making and Reinforcement Learning</a>
-->
		<!--<br><em>(Click on an author's name to view all papers by that author.)</em>-->
		</span>
		 <div class="col-md-8">
                 <h3 class="text-center text-info">Add year of publication</h3>
                 <form action="#" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                     <input type="text" name="year" class="form-control" placeholder="Enter year of publication " required>
                     </div>
                     <br>
                     
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="add_pyear" value="submit" >
                    </div>
                     
                 </form>
             </div>
             
             <section class="section-2 container-fluid p-0">
       <div class="container-fluid">
         <div class="row">
             <div class="col-md-10">
    
                 <?php
  
            $sql = "SELECT * FROM `year`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
                  
                 ?>
                 <h3 class="text-center text-info">list of years  </h3>
                  <table class="table  table-hover">
    <thead>
      <tr>
        <th>#id</th>
        <th>year</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($people2 as $person2): ?>
      <tr>
                  <td> <?= $person2->id; ?></td>
       
        <td> <?= $person2->year; ?></td>
        <td>

                        <a  href="delete_year.php?delete=<?= $person2->id; ?>" class="badge badge-danger p-2">Delete</a>

                      
          </td>


      </tr>
    <?php endforeach; ?>   
    </tbody>
  </table>
                
             </div>
        </div>
      </div>
      
   
     
</section>
             
             
             <div class="col-md-8">
                 <h3 class="text-center text-info">Add new paper</h3>
                 <form action="#" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                     <input type="text" name="name" class="form-control" placeholder="Enter code of topic" >
                     </div>
                     <br>
                     <div class="form-group">
                     <input type="text" name="year" class="form-control" placeholder="Enter year of paper" required>
                     </div>
                     <br>
                     <div class="form-group">
                     
                   <textarea class="form-control" name="description" placeholder="write your text" rows="10" required></textarea> 
                     </div>
                    <br>
                     
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="add_paper" value="submit" >
                    </div>
                     
                 </form>
             </div>
         
        </div>
</section>
          </div>

          <div class="col-lg-12">
               
  <section class="section-2 container-fluid p-0">
       <div class="container-fluid">
         <div class="row">
             <div class="col-md-10">
    
                 <?php
  
            $sql = "SELECT * FROM `paper`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
                  
                 ?>
                 <h3 class="text-center text-info">list of papers  </h3>
                  <table class="table  table-hover">
    <thead>
      <tr>
        <th>#id</th>
        <th>Code</th>
        <th>year</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($people2 as $person2): ?>
      <tr>
                  <td> <?= $person2->id; ?></td>
        <td> <?= $person2->name; ?></td>
        <td> <?= $person2->year; ?></td>
        <td>

                        <a  href="delete_paper.php?delete=<?= $person2->id; ?>" class="badge badge-danger p-2">Delete</a>

                      
          </td>


      </tr>
    <?php endforeach; ?>   
    </tbody>
  </table>
  <div class="col-md-8">
                 <h3 class="text-center text-info">update papers</h3>
                 <form action="#" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                     <input type="text" name="id" class="form-control" placeholder="Enter id of paper" required>
                     </div>
                     <br>
                     <div class="form-group">
                     <input type="text" name="name" class="form-control" placeholder="Enter code of topic" required>
                     </div>
                     <br>
                     <div class="form-group">
                     <input type="text" name="year" class="form-control" placeholder="Enter year of paper" required>
                     </div>
                     <br>
                     <div class="form-group">
                     
                   <textarea class="form-control" name="description" placeholder="write your text" rows="10" required></textarea> 
                     </div>
                    <br>
                     
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="update_paper" value="submit" >
                    </div>
                     
                 </form>
             </div>
                
             </div>
        </div>
      </div>
      
   
     
</section>
          </div>

        </div>

      </div>
      
      
    </section><!-- End Portfolio Details Section -->
    
    
     <hr>
     <hr>
   


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