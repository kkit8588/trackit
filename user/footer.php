<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- CUSTOM JAVASCRIPT -->
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="../plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script src="../plugins/fontawesome/all.min.js" crossorigin="anonymous"></script>
  
  <!-- TABLE DESIGN AND SEARCH START-->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/zf/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/cr-1.5.0/kt-2.4.0/r-2.2.2/datatables.min.js"></script>
  <!-- TABLE DESIGN AND SEARCH END-->

  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  $(document).ready(function() {
        $('#registerFormID').submit(function (e) {
            e.preventDefault();

            var userData = new FormData(this);

            $.ajax({
                url: '../controller/user-register.php',
                type: 'post',
                data: userData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(output) {
                    if (output.status == 'Success') {
                        $('.form-control').val('');
                        Swal.fire({
                            position: "top-center",
                            icon: "info",
                            title: "Registration Link Sent",
                            text: "Please check your email for registration verification!",
                            showConfirmButton: true
                        });
                    }else if (output.status == 'Error'){
                        Swal.fire({
                            position: "top-center",
                            icon: "error",
                            text: "Sorry but your not on the graduate’s list!",
                            showConfirmButton: true
                        });
                    }
                }
            });

        });

        $('#loginFormID').submit(function(e){
           e.preventDefault();

           var loginData = $(this).serialize();
           $.ajax({
               type: 'POST',
               url: '../controller/user-login.php',
               data: loginData,
               dataType: 'json',
               success: function (output) {
                   if (output.status == "success") {
                         window.location.href = 'announcements.php';
                   }else if (output.status == "error") {
                         alert(output.message)
                   }
               
                 },
           });
        });

        $('#forgotFormID').submit(function(e){
           e.preventDefault();

           var forgotData = $(this).serialize();
           $.ajax({
               type: 'POST',
               url: '../controller/user-forgotpassword.php',
               data: forgotData,
               dataType: 'json',
               success: function (output) {
                   if (output.status == 'Success') {
                        $('.form-control').val('');
                        Swal.fire({
                            position: "top-center",
                            icon: "info",
                            title: "Request Successfully",
                            text: "Please check your email for instructions!",
                            showConfirmButton: true
                        });
                    }else if (output.status == 'Error'){
                        Swal.fire({
                            position: "top-center",
                            icon: "error",
                            text: "This Email is not register!",
                            showConfirmButton: true
                        });
                    }
                },
           });
        });

        $('#changeFormID').submit(function(e){
           e.preventDefault();

           var changeData = $(this).serialize();
           $.ajax({
               type: 'POST',
               url: '../controller/user-changepassword.php',
               data: changeData,
               dataType: 'json',
               success: function (output) {
                   if (output.status == 'Success') {
                        $('.form-control').val('');
                        Swal.fire({
                            position: "top-center",
                            icon: "info",
                            title: "Change Password Successfully",
                            text: "You can now login to access dashboard!",
                            showConfirmButton: true
                        });
                    }
                },
           });
        });
        $('#request').submit(function(e){
           e.preventDefault();

           var requestData = $(this).serialize();
           $.ajax({
               type: 'POST',
               url: '../controller/request.php',
               data: requestData,
               dataType: 'json',
               success: function (output) {
                   if (output.status == 'insert') {
                        $('.form-control').val('');
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Requirements Request Successfully",
                            showConfirmButton: true
                        });
                    }
                },
           });
        });
        function announcementtbl(){
          $.ajax({
                type: 'POST',
                url: 'announcements-tbl.php',
                success: function (output) {
                     $('.announcement-tbl').html(output)
                  },
            });
        }

        announcementtbl();

        $('#fns').on('input', function() {
            $(this).val(function(_, val) {
                return val.toUpperCase();
            });
        });
     
  });

</script>
  
  
</body>
  
</html>