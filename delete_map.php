<?php
   session_start();
  include 'db_conn.php';
  
if (isset($_GET['delete'])){
    $id=$_GET['delete'];
    
  
    $query="DELETE FROM `map` WHERE id='$id'";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
      $num;
            $sql = "SELECT * FROM `c`";

        $statement = $connection->prepare($sql);
          $statement->execute([]);
            $people2 = $statement->fetchAll(PDO::FETCH_OBJ);
         foreach($people2 as $person2):
         
         $num=$person2->num_2-1;
         endforeach;
         $query="UPDATE `c` SET num_2='$num' WHERE id=2 ";
     $stmt=$connection->prepare($query);
      $stmt->execute([]);
    header('location:hame.php');
      $_SESSION['response']="Successfully delete to the database! ";
      $_SESSION['res_type']="danger";
    
    
    
}
?>