<?php   
$conn = mysqli_connect(hostname:"localhost",username:"root",password:"",database:"training");

if(isset($_POST["submit"])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql ="insert into user(name,email,password) values('$name','$email','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"ok";
}else{
    echo "error";
}

}









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="text" name="password">
        <input type="email" name="email">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>