
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>freelances</title>
</head>
<body>
  

  <div class="row">
<div class="col-1" id="column1">
<a href="#"><img id="logo" src="images/PeoplePerTask.png" alt="logo">
</a>
<div id="menu">
<div id="home-container">
<a href="dashboard.php"><img src="images/material-symbols_home-rounded.svg" alt="Home">
</a>
</div>
<!-- <div class="menu-section">
<a href="dashboardtrend.php"><img src="images/fire3 1.png" alt="tredning">
<p class="menu-paragraph">Treding Offers</p></a>
</div> -->
<!-- <div class="menu-section">
<a href="#"><img src="images/jam_messages-alt.svg" alt="feedbacks">
<p class="menu-paragraph">feedbacks</p></a>
</div> -->
<div class="menu-section">
<a href="./users.php"><img src="images/group2 1.png" alt="Users">
<p class="menu-paragraph">Users</p></a>
</div>
<!-- <div class="menu-section">
<a href="#"><img src="images/graph2 1.png" alt="Stats">
<p class="menu-paragraph">Stats</p></a>
</div> -->
<div class="menu-section">
<a href="freelances.php"><img src="images/graph2 1.png" alt="Freelances">
<p class="menu-paragraph">Freelances</p></a>
</div>
<div class="menu-section">
<a href="Category.php"><img src="images/graph2 1.png" alt="Category">
<p class="menu-paragraph">Categories</p></a>
</div>
<div class="menu-section">
<a href="sousCategories.php"><img src="images/graph2 1.png" alt="sousCategory">
<p class="menu-paragraph">Sous Categories</p></a>
</div>
<div class="menu-section">
<a href="projects.php"><img src="images/graph2 1.png" alt="projects">
<p class="menu-paragraph">Projects</p></a>
</div>
<div class="line">
</div>
<div class="menu-section">
<a href="#"><img src="images/Vector.svg" alt="help"></a>
</div>
<div class="menu-section">
<a href="#"><img src="images/Vector2.svg" alt="settings"></a>
</div>
</div>
</div>
<div class="col-11" id="column2">
<div id="nav-bar">
<img id="menu-logo" style="height: 40px;" src="images/more.png" alt="menu">
<div id="nav-bar-section2">
<img id="notification" src="images/carbon_notification-new.svg" alt="notification-icon">
<div id="profil">
<h1>Welcome back,Yasser</h1>
<img src="images/profil.png" alt="profil-logo">
</div>
</div>
</div>
<table class="table m-5" name="name">
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
  <button type="button" class="btn btn-light m-5"><a style="text-decoration: none;" href="freelancesAdd.php">ADD</a></button>

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
            <td><button type='button' class='btn btn-light' name='edit'><a style='text-decoration: none;' href='EditFreelances.php?editeId=" . $row['FreelanceID'] . "'>Edit</a></button></td>
            <td><button type='button' class='btn btn-light' name='delete'><a style='text-decoration: none;' href='deleteFreelances.php?deleteId=" . $row['FreelanceID'] . "'>Delete</a></button></td>
        </tr>";
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);


    ?>
 
  </tbody>
</table>
<script src="js/bootstrap.min.js"></script>
    <script src="js/dashboardhome.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
