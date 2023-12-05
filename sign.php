<?php 

include './database/conex.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <title>PeoplePerTask</title>
</head>
<body>

   <?php 
   require_once "header.php";
   ?>
    <section class="container-sign" id="main">
        <div class="sign-up">
            <h2>Create Account</h2>
            <div class="icons">
                <img src="/images/fb.svg">
                <img src="/images/chrome.svg">
                <img src="/images/in.svg"> 
            </div>
            <span>or use your email for registration</span>
            <form action ="users.php" method ="post" class="w-50">
                <div class="mb-3">
                    <label for="Name" style="font-size: 12px;" class="form-label" >Name</label>
                    <input type="text" style="width: 100%;" class="form-control border-bottom border-0 border" id="Name" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: 12px;">Email</label>
                    <input type="email" style="width: 100%;" class="form-control border-bottom border-0 border" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="font-size: 12px;">Password</label>
                    <input type="pass  word" style="width: 100%;" class="form-control border-bottom border-0 border" name="password" id="exampleInputPassword1">
                </div>
                <span class="mobile"><a href="signInMobile.php">sign in</a></span>
                <button type="submit" class="btn text-white rounded-pill btn-outline-primary" style="background-color: #3498DB; width:164px; height:39px" id="submit">Submit</button> 
            </form>
        </div>
        <div class="sign-in"action ="signinlogin.php" method ="post">
            <h2>Sign in</h2>
            <div class="icons">
                <img src="/images/fb.svg">
                <img src="/images/chrome.svg">
                <img src="/images/in.svg"> 
            </div>
            <span>or use your account</span>
                    
            <form action="login.php" method="post" class="w-50">
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label" style="font-size: 12px;">Email or User Name</label>
                    <input type="text" style="width: 80%;" class="form-control border-bottom border-0 border" name="loginIdentifier" id="exampleInputEmail2" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label" style="font-size: 12px;">Password</label>
                    <input type="password" style="width: 80%;" class="form-control border-bottom border-0 border" name="loginPassword" id="exampleInputPassword2">
                </div>
                <span style="display: block;">Forgot your password?</span>
                <span class="mobile"><a href="signmobile.php">sign up</a></span>
                <button type="submit" class="btn text-white rounded-pill btn-outline-primary" style="background-color: #3498DB; width:164px; height:39px">Submit</button> 
            </form>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h2>Welcome Back!</h2>
                    <p>To keep connected with us please login with your personal info</p>
                    <button type="button" class="btn text-white rounded-pill btn-outline-primary"  style="width:164px; height:39px" id="signIn">Sign in</button>
                </div>
                <div class="overlay-right">
                    <h2>Hello, Friend!</h2>
                    <p>Enter your personal details and start your journey with us</p>
                    <button type="button" class="btn text-white rounded-pill btn-outline-primary" style="width:164px; height:39px" id="signUp">Sign up</button>
                </div>
            </div>
        </div>
    </section>
  <?php 
require_once "footer.php";
  ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sign.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
</body>
</html>
