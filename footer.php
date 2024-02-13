<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- CUSTOM JAVASCRIPT -->
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <!-- BOOTSTRAP JS OFFLINE -->
  <script type="text/javascript" src="./plugins/bootstrap5/bootstrap.min.js"></script>
  <!-- FONT AWESOME OFFLINE -->
  <script type="text/javascript" src="./plugins/fontawesome/all.min.js"></script>
  <!-- JQUERY -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- SWEET ALERT -->

  <script>

  $(document).ready(function() {
    $(".formReport").submit(function(e){
        e.preventDefault();

        var reportData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "./controller/form-controller.php",
            data: reportData,
            dataType: 'json',
            success: function(response) {
                if (response.status === "INSERT") {
                  Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Thank you for submitting!",
                    showConfirmButton: false,
                    timer: 1500
                  });
                  $('.form-control-sm').val(" ");
                  $('input[type="radio"]').prop('checked', false);
                }else{
                  Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Updating information successfully!",
                    showConfirmButton: false,
                    timer: 1500
                  });
                  $.ajax({
                      type: 'POST',
                      url: 'reports-tbl.php',
                      success: function (output) {
                           $('.reporttable').html(output)
                        },
                  });
                }
                
            }
        });
    });
});



  </script>


</body>
</html>