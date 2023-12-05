<?php
include("./database/conex.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["loginIdentifier"], $_POST["loginPassword"])) {
        $loginIdentifier = $_POST["loginIdentifier"];
        $loginPassword = $_POST["loginPassword"];
        $hashedPassword = password_hash($loginPassword, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM users WHERE UserName = ? OR Email = ? ";
   
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $loginIdentifier, $loginIdentifier);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result) ) {
            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['UserName'] = $row['UserName'];
            $_SESSION['Email'] = $row['Email'];
            if(password_verify($loginPassword,$row['PasswordHash'])){
                setcookie("UserID", $row['UserID'], time() + (86400 * 30), "/"); 
                setcookie("UserName", $row['UserName'], time() + (86400 * 30), "/");
                header("location: dashboard.php");
                exit(); 
            }
           
        } else {
            header("location: sign.php");
            exit();
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        header("location: sign.php");
        exit();
    }
}


?>
