<?php
$conn=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"training");
$sql="select * from user";
$result =mysqli_query($conn,$sql);
if(isset($result)){
    echo"success";
}else{
    echo"not";
}
if($result){

  while ($row=mysqli_fetch_assoc($result)){
     echo $row["id"]."<br>";
    echo $row["name"];
    echo $row["password"];
    echo $row["email"];
    echo"<a href='delete.php?id=".$row["id"]."'>delete</a>";
    }


}else{
    echo "no";
}

?>