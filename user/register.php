<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <?php 
    session_start();
    include '../connect.php';

    // Check if the user is logged in
    // if (isset($_SESSION['id'])) {
    //     header('Location: dashboard.php');
    //     exit();
    // }
    include 'header.php';
    ?>


</head>
<body>

<div class="login-container d-flex flex-column justify-content-between">
   <div class="hf-bg py-3 shadow"><h1 class="text-white text-center ">USER - REGISTER</h1></div>   
   <div class="form-container bg-transparent border-0 d-flex justify-content-center form-control">
      <form id="registerFormID" class="registerForm shadow rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-1" enctype="multipart/form-data">
         
         <center><img src="../upload/logo.png" width="150" height="150"></center>
         
         <div class="input-group input-group-lg mb-3">
           <input type="text" name="fullname" id="fns" class="form-control" placeholder="Your Fullname*">
           <span class="input-group-text ">
              <i class="fa-solid fa-user fs-4"></i>
           </span>
         </div>
         <div class="input-group input-group-lg mb-3">
           <input type="email" name="email" class="form-control" placeholder="Your email*">
           <span class="input-group-text ">
              <i class="fa-solid fa-envelope fs-4"></i>
           </span>
         </div>
         <div class="input-group input-group-lg mb-3">
           <input type="text" name="yg" class="form-control" placeholder="Your year graduated*">
           <span class="input-group-text ">
              <i class="fa-solid fa-calendar-days fs-4"></i>
           </span>
         </div>
         <div class="input-group input-group-lg mb-3">
           <input type="text" name="username" class="form-control" placeholder="Your username*">
           <span class="input-group-text ">
              <i class="fa-solid fa-user fs-4"></i>
           </span>
         </div>
         <div class="input-group input-group-lg mb-3">
           <input type="password" name="password" class="form-control" placeholder="Your password*">
           <span class="input-group-text ">
              <i class="fa-solid fa-key fs-4"></i>
           </span>
         </div>

         <input type="submit" name="submit" value="REGISTER" class="btn btn-outline-primary fw-bold">
         <div class="d-flex">
            <a href="forgotpassword.php" class="text-decoration-none">Forgot password?</a>
            <a href="login.php" class="text-decoration-none ms-auto">Login Here</a>
         </div>
      </form>
   </div>
   <div class=" py-4"></div>
</div>
   <?php include 'footer.php' ?>
</body>
</html>