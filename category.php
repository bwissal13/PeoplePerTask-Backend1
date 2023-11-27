<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Category</title>
</head>
<body>
    <div>
    <button type="button" class="btn btn-light"><a style="text-decoration: none;" href="addCategory.php">ADD</a></button>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Category ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
    <?php
    include "./database/conex.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
       $categoryName =$_POST['name'] ;
       $sql = "INSERT INTO categories (CategoryName) VALUES ('$categoryName')";
    while(mysqli_query($conn,$sql)){
    header("location:category.php");
    exit();
    }
    }
    $sql="Select * from categories";
    $result = mysqli_query($conn,$sql);
    if ($result){
        while($row=mysqli_fetch_assoc($result)){
      echo  " <tbody>
        <tr>
          <th>". $row['CategoryID'] ."</th>
          <td>". $row['CategoryName' ]."</td>
          <td><button type='button' class='btn btn-light' name ='edit'><a style='text-decoration: none;' href='categoryEdit.php?editeId=" . $row['CategoryID'] . "'>Edit</a></button></td>
        <td><button type='button' class='btn btn-light' name ='delete'><a style='text-decoration: none;' href='categoryDelete.php?deleteId=" . $row['CategoryID'] . "'>Delete</a></button></td>
        </tr>
      </tbody>";
        }
        mysqli_free_result($result);
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
    
    
    ?>


</table>
</body>
</html>