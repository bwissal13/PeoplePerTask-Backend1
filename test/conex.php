<?php
$servername= "localhost";
$username= "root";
$password= "";
$database= "test";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
   die("failed:".mysql_connect_error());
}
?>