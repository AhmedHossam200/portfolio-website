<?php
   session_start();
  include 'db_conn.php';
  
if (isset($_GET['delete'])){
    $id=$_GET['delete'];
    
  
    $query="DELETE FROM `year` WHERE id='$id'";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
      header('location:hame.php');
    
    
    
    
}
?>