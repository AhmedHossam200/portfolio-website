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
  
  
   if(isset($_POST['update_personal'])){
       $id=$_POST['id'];
      $name=$_POST['personal_desc'];
      

      $photo=$_FILES['file_image']['name'];
      $upload="image/".$photo;
       
      $query="UPDATE `personal` SET `personal_desc`='$name',`personal_img`='$upload' WHERE id=$id";
      $stmt=$connection->prepare($query);
      $stmt->execute([]);

      move_uploaded_file($_FILES['file_image']['tmp_name'],$upload);
      
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
    vertical-align: text-top;
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

          <li><a href="hame.php" class="nav-link scrollto "><i class="bi bi-file-text"></i> <span>Papers</span></a></li>
          <li><a href="admin_book.php" class="nav-link scrollto "><i class="bi bi-book"></i> <span>Books</span></a></li>
          <li><a href="admin_collab.php" class="nav-link scrollto"><i class="bi bi-arrow-left-right"></i> <span>Collaborations</span></a></li>
          <li><a href="admin_personal.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Personal</span></a></li>
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
        
     
<!--     ################## add new personal ##########3-->
       <section class="section-2 container-fluid p-0">
    <div class="container-fluid">

     
         
             <div class="col-md-8">
                 <h3 class="text-center text-info">Add new personal</h3>
                 <form action="#" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                     <input type="text" name="personal_desc" class="form-control" placeholder="Enter personal description" required>
                     </div>
<!--
                     <div class="form-group">
                     <input type="text" name="collab_link" class="form-control" placeholder="Enter your link" required>
                     </div>
-->
                   
                     
                     
                     <div class="form-group">
                        <input type="file" class="custom-file" name="file_image"  >
                    </div>
                      
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="add_personal" value="creat" >
                    </div>
                     
                 </form>
             </div>
         
        </div>
</section>
 <section class="section-2 container-fluid p-0">
       <div class="container-fluid">
         <div class="row">
             <div class="col-md-10">
    
                 <?php
  
            $sql = "SELECT * FROM `personal`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people = $statement->fetchAll(PDO::FETCH_OBJ);
                  
                 ?>
                 <h3 class="text-center text-info">list of personal  </h3>
                  <table class="table  table-hover">
    <thead>
      <tr>
        <th>#</th>
        
        <th>description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($people as $person): ?>
      <tr>
                  <td> <?= $person->id; ?></td>
        <td> <?= $person->personal_desc; ?></td>

        <td>

                        <a  href="delete_personal.php?delete=<?= $person->id; ?>" class="badge badge-danger p-2">Delete</a>

                      
          </td>


      </tr>
    <?php endforeach; ?>   
    </tbody>
  </table>
                
             </div>
        </div>
      </div>
      
       <section class="section-2 container-fluid p-0">
    <div class="container-fluid">

     
         
             <div class="col-md-8">
                 <h3 class="text-center text-info">update personal</h3>
                 <form action="#" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                     <input type="text" name="id" class="form-control" placeholder="Enter personal id" required>
                     </div>
                     <div class="form-group">
                     <input type="text" name="personal_desc" class="form-control" placeholder="Enter personal description" required>
                     </div>
<!--
                     <div class="form-group">
                     <input type="text" name="collab_link" class="form-control" placeholder="Enter your link" required>
                     </div>
-->
                   
                     
                     
                     <div class="form-group">
                        <input type="file" class="custom-file" name="file_image"  >
                    </div>
                      
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="update_personal" value="creat" >
                    </div>
                     
                 </form>
             </div>
         
        </div>
</section>
      
   
     
</section>

     
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