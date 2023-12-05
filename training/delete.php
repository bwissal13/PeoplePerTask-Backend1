<?php
$conn =mysqli_connect(hostname:"localhost",username:"root",password:"",database:"training");
$id=$_GET["id"];

$sql ="Delete from user where id = $id";
$result = mysqli_query($conn,$sql);

?>