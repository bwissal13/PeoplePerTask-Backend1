<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  
  <button type="button" class="btn btn-light"><a style="text-decoration: none;" href="freelancesAdd.php">ADD</a></button>


<table class="table" name="name">
  <thead>
    <tr>
      <th scope="col">Freelance ID</th>
      <th scope="col">Freelance Name</th>
      <th scope="col">Competences</th>
      <th scope="col">UserName</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    <?php  
    // include("./database/conex.php");
    // $selectedUsername = isset($_POST["username"]) ? $_POST["username"] : null;
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //      $freelanceName = $_POST["name"];
    //     $competences = $_POST["competences"];
      
    //     $sql = "INSERT INTO freelances (FreelanceName, Competences,UserName) VALUES (' $freelanceName', '$competences','$selectedUsername')";
    //     if(mysqli_query($conn,$sql)){
    //         header("location:freelances.php");
    //         exit();
    //     }
     
    //  }
     
    //  $sql = "SELECT f.FreelanceID, f.FreelanceName, f.Competences, u.UserID, u.UserName
    //     FROM peoplepertask.freelances f
    //     JOIN users u ON f.UserName = u.UserName";
    // // $sql = "select * from peoplepertask.freelances";
    //    $result = mysqli_query($conn, $sql);

    //    if ($result) {
    //         while ($row = mysqli_fetch_assoc($result)) {
    //          echo "<tr>
    //          <td>" . $row['FreelanceID'] . "</td>
    //          <td>" . $row['FreelanceName'] . "</td>
    //          <td>" . $row['Competences'] . "</td>
    //          <td>" . $row['UserName'] . "</td>
    //          <td>" . $row['UserID'] . "</td>
    //          <td><button type='button' class='btn btn-light' name ='edit'><a style='text-decoration: none;' href='edit.php?editeId=" . $row['FreelanceID'] . "'>Edit</a></button></td>
    //          <td><button type='button' class='btn btn-light' name ='delete'><a style='text-decoration: none;' href='deleteFreelances.php?deleteId=" . $row['FreelanceID'] . "'>Delete</a></button></td>
    //        </tr>";
    //        }
    //        mysqli_free_result($result);
    //    } else {
           
    //        echo "Error: " . mysqli_error($conn);
    //    }
     

include("./database/conex.php");

$selectedUsername = isset($_POST["username"]) ? $_POST["username"] : null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $freelanceName = $_POST["name"];
    $competences = $_POST["competences"];

    // Assuming you have a column named 'UserID' in the 'users' table
    $query = "SELECT UserID FROM users WHERE UserName = '$selectedUsername'";

    $result = mysqli_query($conn, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $userID = $row['UserID'];

        $sql = "INSERT INTO freelances (FreelanceName, Competences, UserName, UserID) VALUES ('$freelanceName', '$competences', '$selectedUsername', '$userID')";

        if (mysqli_query($conn, $sql)) {
            header("location:freelances.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error retrieving UserID for the selected username.";
    }

    mysqli_free_result($result);
}


$sql = "SELECT f.FreelanceID, f.FreelanceName, f.Competences, u.UserName, u.UserID
        FROM peoplepertask.freelances f
        JOIN users u ON f.UserName = u.UserName";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>" . $row['FreelanceID'] . "</td>
            <td>" . $row['FreelanceName'] . "</td>
            <td>" . $row['Competences'] . "</td>
            <td>" . $row['UserName'] . "</td>
            <td><button type='button' class='btn btn-light' name='edit'><a style='text-decoration: none;' href='edit.php?editeId=" . $row['FreelanceID'] . "'>Edit</a></button></td>
            <td><button type='button' class='btn btn-light' name='delete'><a style='text-decoration: none;' href='deleteFreelances.php?deleteId=" . $row['FreelanceID'] . "'>Delete</a></button></td>
        </tr>";
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);


    ?>
 
  </tbody>
</table>
</body>
</html>
