
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
        <h2>Add Sous Category</h2>
        <form action="sousCategories.php" method="POST" class="w-50">
            <div class="mb-3">
                <label for="Name" style="font-size: 12px;" class="form-label">Sous Category Name</label>
                <input type="text" style="width: 100%;" class="form-control border-bottom border-0 border" id="Name" name="name" value=""  aria-describedby="emailHelp">
            </div>
            <div>
                <label for="Name" style="font-size: 12px;" class="form-label">Category Name</label>
                <select class="form-select border-bottom border-0 border mb-5" aria-label="Default select example" name="category">
                    <option selected disabled>Category Name</option>
                    <?php
                        foreach ($categories as $categoryName) {
                            echo "<option value='$categoryName'>$categoryName</option>";
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn text-white rounded-pill btn-outline-primary" style="background-color: #3498DB; width:164px; height:39px" id="edit" name= "submit">Add</button>
        </form>
    </div>
</section>



        <!-- <footer class="footer-section">
            <div class="container">
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-3">
                            <div class="single-cta">
                                <i class="fa-solid fa-map" style="color: #f39c12;"></i>
                                <div class="cta-text">
                                    <h4>Find us</h4>
                                    <span>1010 Avenue, sw 54321, chandigarh</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-3">
                            <div class="single-cta">
                                <i class="fas fa-phone" style="color: #f39c12;"></i>
                                <div class="cta-text">
                                    <h4>Call us</h4>
                                    <span>9876543210 0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-3">
                            <div class="single-cta">
                                <i class="fa-solid fa-envelope" style="color: #f39c12;"></i>
                                <div class="cta-text">
                                    <h4>Mail us</h4>
                                    <span>mail@info.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-3">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.php"><img src="images/PeoplePerTask.png" class="img-fluid" alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p>At PeoplePerTask, we foster a thriving community of skilled professionals and businesses, seamlessly facilitating the connection between talent and tasks. With a commitment to excellence and user satisfaction, our platform serves as a dynamic hub for collaboration, enabling individuals and companies to achieve their goals efficiently and effectively.</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>Follow us</span>
                                    <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                    <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget ps-lg-5">
                                <div class="footer-widget-heading">
                                    <h3>Links</h3>
                                </div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                </div>
                                <div class="footer-text mb-25">
                                    <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                                </div>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="text" placeholder="Email Address">
                                        <button><i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 text-center mx-auto">
                            <div class="copyright-text">
                                <p>© 2023 PeoplePerTask. All rights reserved </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
        <script src="js/bootstrap.min.js"></script>
        <script src="js/sign.js"></script>
        <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    </body>
    </html> -->
                         