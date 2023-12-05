<?php
include "conex.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $name =$_POST["name"];
$jobs=$_POST["jobs"];
$hobies=$_POST["hobies"];
    $sql = "Insert into users (full_name,jobs,hobies) values ('$name','$jobs','$hobies')";
    if(mysqli_query($conn,$sql)){
        header("location:usersshow.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>
<body>
   <form action="users.php" method="POST">
    <label for="">name</label>
    <input type="text" name='name'><br>
    <label for="">jobs</label>
    <input type="text" name='jobs'><br>
 <!-- <select name="jobs" id="">
    <option value="0" selected disabled>choose job</option>
    <option value="1">homeless</option>
    <option value="2">stupid</option>
    <option value="3">weird</option>
    <option value="4">smart_3atifiyan</option>
 </select><br> -->
    <label for="">hobies</label>
    <input type="text" name='hobies'><br>
  <button type="submit">add</button>
   </form> 
</body>
</html>