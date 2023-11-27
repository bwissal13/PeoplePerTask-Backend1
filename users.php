<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  
  <button type="button" class="btn btn-light"><a style="text-decoration: none;" href="sign.php">ADD</a></button>


<table class="table" name="name">
  <thead>
    <tr>
      <th scope="col">UserId</th>
      <th scope="col">UserName</th>
      <th scope="col">email</th>
      <th scope="col">edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    include("./database/conex.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "INSERT INTO users (UserName, email,PasswordHash) VALUES ('$name', '$email','$password')";
        if(mysqli_query($conn,$sql)){
            header("location:users.php");
            exit();
        }
     
     }
    $sql = "select * from peoplepertask.users";
       $result = mysqli_query($conn, $sql);

       if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
             echo "<tr>
             <td>" . $row['UserID'] . "</td>
             <td>" . $row['UserName'] . "</td>
             <td>" . $row['Email'] . "</td>
             <td><button type='button' class='btn btn-light' name ='edit'><a style='text-decoration: none;' href='edit.php?editeId=" . $row['UserID'] . "'>Edit</a></button></td>
             <td><button type='button' class='btn btn-light' name ='delete'><a style='text-decoration: none;' href='delete.php?deleteId=" . $row['UserID'] . "'>Delete</a></button></td>
           </tr>";
           }
           mysqli_free_result($result);
       } else {
           
           echo "Error: " . mysqli_error($conn);
       }
     
    
    ?>
  
  </tbody>
</table>
</body>
</html>
