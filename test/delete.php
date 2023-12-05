<?php
include "conex.php";
$id = $_GET["id"];
$sql = "delete from users where id = '$id'";
?>