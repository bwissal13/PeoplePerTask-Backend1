<?php 
include './database/conex.php';

if (isset($_GET['deleteId'])){
   $id = $_GET['deleteId']; 
   $sql = "DELETE FROM souscategories WHERE sousCategoryID= $id";
   $result = mysqli_query($conn, $sql);

   if ($result) {
     header('location:sousCategories.php');
   } else {
      die(mysqli_error($conn));
   }
}
?>
