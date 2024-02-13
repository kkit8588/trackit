<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Change Password</title>

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
   <div class="hf-bg py-3 shadow"><h1 class="text-white text-center ">USER - CHANGE PASSWORD</h1></div>   
   <div class="form-container bg-transparent border-0 d-flex justify-content-center form-control">
      <form id="changeFormID" class="changeForm shadow rounded-4 dow-sm py-5 px-4 d-flex flex-column row-gap-3" >
         <input type="email" name="email" value="<?php echo $_GET['email']?>" hidden>
         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="password" name="password" id="password" placeholder="Please type your password." class="password form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-lock fs-3 px-3 text-white"></i>
         </div>
         <div class="inputContainer d-flex align-items-center shadow-sm rounded">
            <input type="password" name="password" id="confirmpassword" placeholder="Please type your password." class="password form-control form-control-lg rounded-0 rounded-start" required>
            <i class="fa-solid fa-lock-open fs-4 px-3 text-white"></i>
         </div>
         <div class="d-flex column-gap-1">
            <input type="checkbox" id="showPassword">
            <label for="showPassword">Show Password</label>
         </div>
         <input id="savenbtn" type="submit" name="submit" value="SAVE" class="btn btn-outline-success fw-bold" disabled>
         <div class="d-flex">
            <a href="login.php" class="text-decoration-none">Login Here</a>
            <a href="register.php" class="text-decoration-none ms-auto">Register Here</a>
         </div>
         <div id="toastalert" class="toast align-items-center text-bg-warning border-0 w-100" role="alert" aria-live="assertive" aria-atomic="true">
           <div class="d-flex">
             <div class="toast-body">
               Your password is not match!
             </div>
           </div>
         </div>
      </form>
   </div>
   <div class=" py-4"></div>
</div>
   <?php include 'footer.php' ?>
   <script>

     $(document).ready(function () {
      // Toggle password visibility based on checkbox state
      $('#showPassword').on('change', function () {
        $('.password').attr('type', $(this).prop('checked') ? 'text' : 'password');
      });

      // Check passwords and update submit button state
      function checkPasswords() {
        const passwordValue = $('#password').val();
        const confirmPasswordValue = $('#confirmpassword').val();

        $('#savenbtn').prop('disabled', passwordValue !== confirmPasswordValue);
        $('#toastalert').toggleClass('show', passwordValue !== confirmPasswordValue);
      }

      // Event listeners for password inputs
      $('#password, #confirmpassword').on('input change', checkPasswords);
    });

</script>
</body>
</html>