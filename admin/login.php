<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <?php 
    session_start();
    include '../connect.php';

    // Check if the user is logged in
    if (isset($_SESSION['id'])) {
        header('Location: dashboard.php');
        exit();
    }
   include 'header.php';
    ?>


</head>
<body>

<div class="login-container d-flex flex-column justify-content-between">
   <div class="hf-bg py-3 shadow"><h1 class="text-white text-center ">ADMIN - LOGIN</h1></div>   
   <div class="form-container bg-transparent border-0 d-flex justify-content-center form-control">
      <form id="loginFormID" class="loginForm shadow rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-3" >
         
         <center><img src="../upload/logo.png" width="150" height="150"></center>
         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="text" name="username" placeholder="Please enter your email." class="form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-user fs-3 px-3 text-white"></i>
         </div>

         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="password" name="password" placeholder="Please enter your password." class="form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-key fs-4 px-3 text-white"></i>
         </div>
         <input type="submit" name="submit" value="LOGIN" class="btn btn-outline-primary fw-bold">
         <div class="d-flex">
            <a href="forgotpassword.php" class="text-decoration-none ms-auto">Forgot password?</a>
         </div>
      </form>
   </div>
   <div class=" py-4"></div>
</div>
   
   <?php include 'footer.php' ?>
   <script>
   $(document).ready(function(){
      $('.loginForm').submit(function(e){
           e.preventDefault();

           var loginData = $(this).serialize();
           $.ajax({
               type: 'POST',
               url: '../controller/login-controller.php',
               data: loginData,
               dataType: 'json',
               success: function (output) {
                   if (output.status === "success") {
                         window.location.href = 'dashboard.php';
                   }else if (output.status === "error") {
                     alert(output.message)
                   }
               
                 },
           });
       });
   });

   </script>
</body>
</html>