<?php 
include './database/conex.php';

if (isset($_GET['deleteId'])){
   $id = $_GET['deleteId']; 
   $sql = "DELETE FROM users WHERE UserID = $id";
   $result = mysqli_query($conn, $sql);

   if ($result) {
     header('location:users.php');
   } else {
      die(mysqli_error($conn));
   }
}
?>
