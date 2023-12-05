<?php
include "./database/conex.php";
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

$id = isset($_GET['editeId']) ? $_GET['editeId'] : $_POST['editeId'];

if (isset($_POST["submit"])) {
    $freelanceName = $_POST["name"];
    $competences = $_POST["competences"];
    $query = "UPDATE freelances SET FreelanceName='$freelanceName', Competences='$competences' WHERE FreelanceID = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:freelances.php?msg=updated database successfully");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
$query = "SELECT * FROM freelances WHERE FreelanceID = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <title>PeoplePerTask</title>
</head>
<body>

<section class="container-sign" id="main">
    <div class="sign-up m-5 p-5">
        <h2>Edit Freelances</h2>
        <form action="" method="POST" class="w-50">
            <div class="mb-3">
                <label for="Name" style="font-size: 12px;" class="form-label">Freelance Name</label>
                <input type="text" style="width: 100%;" class="form-control border-bottom border-0 border" id="Name" name="name" value="<?php echo $row['FreelanceName']?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Name" style="font-size: 12px;" class="form-label">Competences</label>
                <input type="text" style="width: 100%;" class="form-control border-bottom border-0 border" id="Name" name="competences" value="<?php echo $row['Competences']?>" aria-describedby="emailHelp">
            </div>
            <div>
                <label for="Name" style="font-size: 12px;" class="form-label">UserName</label>
                <select class="form-select border-bottom border-0 border mb-5" aria-label="Default select example" name="username">
                    <option selected disabled>User Name</option>
                    <?php
                    foreach ($usernames as $username) {
                        echo "<option value='$username' " . ($username == $row['UserName'] ? 'selected' : '') . ">$username</option>";
                    }
                    ?>
                </select>
            </div>
            <input type="hidden" id="Name" name="editeId" value="<?php echo $id?>">
            <button type="submit" class="btn text-white rounded-pill btn-outline-primary" style="background-color: #3498DB; width:164px; height:39px" id="edit" name="submit">Edit</button>
        </form>
    </div>
</section>

</body>
</html>
