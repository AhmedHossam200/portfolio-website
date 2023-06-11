<?php
   session_start();
  include 'db_conn.php';
  
if (isset($_GET['delete'])){
    $id=$_GET['delete'];
     $sql="SELECT * FROM `personal` WHERE  id='$id' ";
      $stmt2=$connection->prepare($sql);
      $stmt2->execute([]);
   $result = $stmt2->fetch(PDO::FETCH_ASSOC);

   
  
   $query="DELETE FROM `personal` WHERE id='$id'";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
    header('location:admin_personal.php');
//       $num;
//            $sql = "SELECT * FROM `c`";
//
//        $statement = $connection->prepare($sql);
//          $statement->execute([]);
//            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
//         foreach($people2 as $person2):
//         
//         $num=$person2->num_3-1;
//         endforeach;
//         $query="UPDATE `c` SET num_3='$num' WHERE id=2 ";
//     $stmt=$connection->prepare($query);
//      $stmt->execute([]);
//      $_SESSION['response']="Successfully delete to the database! ";
//     $_SESSION['res_type']="danger";
    
    
    
}
?>