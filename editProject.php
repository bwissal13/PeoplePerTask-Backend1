<?php 
   include "./database/conex.php";
   $query = "SELECT CategoryName FROM categories";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Error in SQL query: " . mysqli_error($conn) . "<br>Query: " . $query);
}
$categories = [];
while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row['CategoryName'];
}
mysqli_free_result($result);
$query = "SELECT UserName FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Error in SQL query: " . mysqli_error($conn) . "<br>Query: " . $query);
}
$usernames = [];
while ($row = mysqli_fetch_assoc($result)) {
    $usernames[] = $row['UserName'];
}
mysqli_free_result($result);

$query = "SELECT SousCategoryName FROM souscategories";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Error in SQL query: " . mysqli_error($conn) . "<br>Query: " . $query);
}
$souscategories = [];
while ($row = mysqli_fetch_assoc($result)) {
    $souscategories[] = $row['SousCategoryName'];
}
mysqli_free_result($result);
$id = isset($_GET['editeId']) ? $_GET['editeId'] : $_POST['editeId'];

$query = "SELECT * FROM projects WHERE projectID = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST["submit"])){
                    $projectTitle = $_POST['Title'];
                 $Category = $_POST['category'];
                 $SousCategory = $_POST['SousCategoryName'];
                 $username = $_POST['username'];
                 $sql = "INSERT INTO projects (ProjectTitle, CategoryName, SousCategoryName, UserName) VALUES ('$projectTitle', '$Category', '$SousCategory', '$username');";

    $query="Update projects set ProjectTitle ='$projectTitle',CategoryName='  $Category',SousCategoryName=' $SousCategory',UserName=' $username' WHERE ProjectID=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:freelances.php?msg=updated database successfully");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
   ?> 
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="css/sign.css"> -->
        <link rel="stylesheet" href="css/header_footer.css">
        <title>PeoplePerTask</title>
    </head>
    <body>
    
    
        <!-- <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                  <a class="navbar-brand" href="index.php"><img src="images/PeoplePerTask.png" style="width: 12rem;" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars" style="color: #6298f3;"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0 auto;">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="search.php">Searsh</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                    </ul>
                    <form class="d-flex nav_btn" role="search">
                      <a href="#" class="btn btn-primary">Connect</a>
                    </form>
                    <i id="dark-mode-toggle" class="fas fa-moon ps-3 "></i>
                  </div>
                </div>
              </nav>
        </header> -->
   
           

       
        
         <section class="container-sign" id="main">
    <div class="sign-up m-5 p-5">
        <h2>Edit Projects</h2>
        <form action="projects.php" method="POST" class="w-50">
            <div class="mb-3">
                <label for="Name" style="font-size: 12px;" class="form-label">Project Title</label>
                <input type="text" style="width: 100%;" class="form-control border-bottom border-0 border" id="Name" name="Title" value="<?php echo $row['ProjectTitle']?>"   aria-describedby="emailHelp">
            </div>
            <div>
                <label for="Name" style="font-size: 12px;" class="form-label">User Name</label>
                <select class="form-select border-bottom border-0 border mb-5" aria-label="Default select example" name="username">
                    <option selected disabled>User Name</option>
                    <?php
                    foreach ($usernames as $username) {
                        echo "<option value='$username' " . ($username == $row['UserName'] ? 'selected' : '') . ">$username</option>";
                    }
                                       
                    ?>
                </select>
            </div>

            
            <div>
                <label for="Name" style="font-size: 12px;" class="form-label">Category Name</label>
                <select class="form-select border-bottom border-0 border mb-5" aria-label="Default select example" name="category">
                    <option selected disabled>Category Name</option>
                    <?php
                        foreach ($categories as $categoryName) {
                            echo "<option value='$categoryName'".($categoryName == $row['CategoryName']?'selected':'').">$categoryName</option>";
                        }
                    ?>
                </select>
            </div>

            <div>
                <label for="Name" style="font-size: 12px;" class="form-label">Sous Category Name</label>
                <select class="form-select border-bottom border-0 border mb-5" aria-label="Default select example" name="SousCategoryName">
                    <option selected disabled>Sous Category Name</option>
                    <?php
                        foreach ($souscategories as $souscategoryName) {
                            echo "<option value='$souscategoryName'".($souscategoryName==$row['SousCategoryName']?'selected':'').">$souscategoryName</option>";
                        }
                    ?>
                </select>
            </div>
            <input type="hidden" name="editeId" value="<?php echo $id?>">
            <button type="submit" class="btn text-white rounded-pill btn-outline-primary" style="background-color: #3498DB; width:164px; height:39px" id="edit" name= "submit">Edit</button>
        </form>
    </div>
</section>

    </body>