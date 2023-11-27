<?php 
include "./database/conex.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn-light"><a style="text-decoration: none;" href="addProjects.php">ADD</a></button>

<table class="table">
  <thead>
    <tr>
      <th>ProjectID</th>
      <th>ProjectTitle</th>
      <th>UserID</th>
      <th>CategoryID</th>
      <th>SousCategoryID</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
            include "./database/conex.php";
            if($_SERVER["REQUEST_METHOD"] == 'POST'){
                 $projectTitle = 'Title';
                 $sql="INSERT INTO projects (ProjectTitle) values ('$projectTitle');";
                 if (mysqli_query($conn,$sql)){
                    header("location:projects.php");
                    exit();
                 }
            }
            $sql = "select * from peoplepertask.projects";
       $result = mysqli_query($conn, $sql);

   
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $row['ProjectID'] . "</td>
            <td>" . $row['ProjectTitle'] . "</td>
            <td>" . $row['UserID'] . "</td>
            <td>" . $row['CategoryID'] . "</td>
            <td>" . $row['SousCategoryID'] . "</td>
            <td><button type='button' class='btn btn-light' name='edit'><a style='text-decoration: none;' href='edit.php?editeId=" . $row['UserID'] . "'>Edit</a></button></td>
            <td><button type='button' class='btn btn-light' name='delete'><a style='text-decoration: none;' href='delete.php?deleteId=" . $row['UserID'] . "'>Delete</a></button></td>
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