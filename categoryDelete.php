<?php 
include './database/conex.php';

if (isset($_GET['deleteId'])){
   $id = $_GET['deleteId']; 
   $sql = "DELETE FROM categories WHERE CategoryID = $id";
   $result = mysqli_query($conn, $sql);

   if ($result) {
     header('location:category.php');
   } else {
      die(mysqli_error($conn));
   }
}
?>
