<?php 
include './database/conex.php';

if (isset($_GET['deleteId'])){
   $id = $_GET['deleteId']; 
   $sql = "DELETE FROM projects WHERE ProjectID = $id";
   $result = mysqli_query($conn, $sql);

   if ($result) {
     header('location:projects.php');
   } else {
      die(mysqli_error($conn));
   }
}
?>
