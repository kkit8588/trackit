<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Forgot Password</title>

   <?php 
    // session_start();
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
   <div class="hf-bg py-3 shadow"><h1 class="text-white text-center ">ADMIN - FORGOT PASSWORD</h1></div>   
   <div class="form-container bg-transparent border-0 d-flex justify-content-center form-control">
      <form id="forgotFormID" class="forgotForm shadow rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-3" >
         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="email" name="email" placeholder="Please type your email." class="form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-envelope fs-3 px-3 text-white"></i>
         </div>
         <input type="submit" name="submit" value="SEND INSTRUCTION" class="btn btn-outline-primary fw-bold">
         <div class="d-flex">
            <a href="login.php" class="text-decoration-none ms-auto">Login Here</a>
         </div>
         
      </form>
   </div>
   <div class=" py-4"></div>
</div>
   <?php include 'footer.php' ?>
</body>
</html>