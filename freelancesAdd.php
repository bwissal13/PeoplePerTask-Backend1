
<?php 
   include "./database/conex.php";
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
    
    
    <?php
include("./database/conex.php");

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
?>
           

       
        
         <section class="container-sign" id="main">
    <div class="sign-up m-5 p-5">
        <h2>Add Freelances</h2>
        <form action="freelances.php" method="POST" class="w-50">
            <div class="mb-3">
                <label for="Name" style="font-size: 12px;" class="form-label">Freelance Name</label>
                <input type="text" style="width: 100%;" class="form-control border-bottom border-0 border" id="Name" name="name" value=""  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Name" style="font-size: 12px;" class="form-label">Competences</label>
                <input type="text" style="width: 100%;" class="form-control border-bottom border-0 border" id="Name" name="competences" value=""  aria-describedby="emailHelp">
            </div>
            <div>
            <label for="Name" style="font-size: 12px;" class="form-label">UserName</label>
                <select class="form-select border-bottom border-0 border mb-5" aria-label="Default select example" name="username">
                    <option selected disabled>User Name</option>
                    <?php
            
                        foreach ($usernames as $username) {
                            echo "<option value=$username>$username</option>";
                        }
                        ?>
                </select>
 
            </div>
        
            <button type="submit" class="btn text-white rounded-pill btn-outline-primary" style="background-color: #3498DB; width:164px; height:39px" id="edit" name= "submit">Add</button>
        </form>
    </div>
</section>

      
    