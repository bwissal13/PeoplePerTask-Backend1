
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Users</title>
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
  
  <button type="button" class="btn btn-light m-5"><a style="text-decoration: none;" href="sign.php">ADD</a></button>


<table class="table m-5" name="name">
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
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (UserName, email, PasswordHash) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

      
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);

        if (mysqli_stmt_execute($stmt)) {
            header("location:users.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
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
<script src="js/bootstrap.min.js"></script>
    <script src="js/dashboardhome.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</html>
