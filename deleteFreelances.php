<?php 
include './database/conex.php';

if (isset($_GET['deleteId'])){
   $id = $_GET['deleteId']; 
   $sql = "DELETE FROM freelances WHERE FreelanceID= $id";
   $result = mysqli_query($conn, $sql);

   if ($result) {
     header('location:freelances.php');
   } else {
      die(mysqli_error($conn));
   }
}
?>
