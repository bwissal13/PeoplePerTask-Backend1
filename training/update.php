<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conn=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"training");
$sql ="update user set 'name'=$name,'email'=$email,'password'=$password where id ='$id'";
$result=mysqli_query($conn,$sql);


?> <form action="" method="post">
<input type="text" name="name" value="$row['name']">
<input type="text" name="password">
<input type="email" name="email">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>