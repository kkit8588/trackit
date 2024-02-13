<?php
 session_start();
include '../connect.php';

$email = $_GET['email'];
$status = 'registered';

    $stmt = $conn->prepare("UPDATE user_tbl SET status=? WHERE email=?");
    $stmt->bind_param("si", $status, $email);
    $update = $stmt->execute();
    $stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <?php 
   include 'header.php';
    ?>

</head>
<body>
<div class="login-container d-flex flex-column justify-content-between">
   <div class="hf-bg py-3 shadow"><h1 class="text-white text-center ">USER - VERIFIED</h1></div>   
   <div class="form-container bg-transparent border-0 d-flex justify-content-center form-control">
      <form id="loginFormID" class="loginForm shadow rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-3" >
         <div class="d-flex flex-column justify-content-center align-items-center">
            <h5>Your Account is Now Verified</h5>
            <a href="login.php" class="text-decoration-none">Click Here To Login</a>
         </div>
      </form>
   </div>
   <div class=" py-4"></div>
</div>
   <?php include 'footer.php' ?>
</body>
</html>
