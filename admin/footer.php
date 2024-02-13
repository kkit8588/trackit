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
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/zf/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/cr-1.5.0/kt-2.4.0/r-2.2.2/datatables.min.js"></script> -->
  <!-- DATATABLE -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <!-- TABLE DESIGN AND SEARCH END-->

  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
$(document).ready(function() {
        
    
 $("#accredited").change(function() {
        var selectedDataId = $(this).find(":selected").index() + 1;

        // Hide all course divs
        $(".course, .address").addClass('d-none');
        $("#selectedid, #selectedad").addClass('d-none');
        // Show the course div corresponding to the selected data-id
        $("#course" + selectedDataId).removeClass('d-none');
        $("#address" + selectedDataId).removeClass('d-none');

    });




    /*==================================
      //announcement
    ==================================*/

    $('.announceForm').submit(function(e){
        e.preventDefault();

        var announceData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../controller/announcement.php',
            data: announceData,
            success: function () {
                 announcementtbl();
                 $('#announce-modal').modal('hide');
              },
        });
    });
    $('#graduates, #enrolled').submit(function(e){
        e.preventDefault();

        var studentsData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../controller/student-controller.php',
            data: studentsData,
            dataType: 'json',
            success: function (output) {
                 if (output.status === 'enrolled') {
                    Swal.fire({
                      title: "Done!",
                      text: "Student Enrolled Added Successfully",
                      icon: "success"
                    });
                 }else if(output.status === 'graduates'){
                    Swal.fire({
                      title: "Done!",
                      text: "Graduates Student Added Successfully",
                      icon: "success"
                    });
                 }else if(output.status === 'error'){
                    Swal.fire({
                      title: "This Year is not available!",
                      icon: "error"
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

    function reqtbl(){
      $.ajax({
            type: 'POST',
            url: 'requirements-table.php',
            success: function (output) {
                 $('.req-tbl').html(output)
              },
        });
    }

    reqtbl();

    function au(){
      $.ajax({
            type: 'POST',
            url: 'au.php',
            success: function (output) {
                 $('.au').html(output)
              },
        });
    }

    au();

    $('.studentList').submit(function(e){
        e.preventDefault();

        var slData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../controller/student-list.php',
            data: slData,
            success: function (output) {
                // announcementtbl()
                // $("#deleteModal").modal('hide')
                $.ajax({
                    type: 'POST',
                    url: 'input-card.php',
                    success: function (output) {
                         $('.stud-input').html(output)
                      },
                });
                Swal.fire({
                  title: "Done!",
                  text: "Add New Student Done!",
                  icon: "success"
                });
                $('#newStudModal').modal('hide');
              },
        });
    });

    // $('.studCard').on('click', function(e){
    //     e.preventDefault();

    //     var dataYr = $(this).data('yr');
    //     $.ajax({
    //         type: 'GET',
    //         url: 'input-table.php',
    //         data: { dataYr: dataYr },
    //         success: function (output) {
    //             $('.studTable').html(output)
    //           },
    //     });
    // });
    function studTable(){
      $.ajax({
            type: 'POST',
            url: 'input-table.php',
            success: function (output) {
                 $('.studList').html(output)
              },
        });
    }

    studTable();

    function studInput(){
      $.ajax({
            type: 'POST',
            url: 'input-card.php',
            success: function (output) {
                 $('.stud-input').html(output)
              },
        });
    }

    studInput();

    $('.deleteForm').submit(function(e){
        e.preventDefault();

        var deleteData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../controller/delete-controller.php',
            data: deleteData,
            success: function (output) {
                announcementtbl()
                $("#deleteModal").modal('hide')
              },
        });
    });


    $('.addBTN').click(function() {
       $('.form-control').val(" ");
    })


    $('.aboutusForm').submit(function(e){
        e.preventDefault();

        var aboutusData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../controller/aboutus-controller.php',
            data: aboutusData,
            success: function () {
                Swal.fire({
                  title: "Done!",
                  text: "Add on About us Done!",
                  icon: "success"
                });
                 au();
                 $('#cardModal').modal('hide');

              },
        });
    });

    function reports(){
      $.ajax({
            type: 'POST',
            url: 'reports-tbl.php',
            success: function (output) {
                 $('.reporttable').html(output)
              },
        });
    }

    reports();

    $('.accreditedForm').submit(function(e){
        e.preventDefault();

        var accreditedData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../controller/accredit-controller.php',
            data: accreditedData,
            dataType: 'json',
            success: function (output) {
                accredited();
                $('#accredited-modal').modal('hide');
                if (output.status === "insert") {
                    $('.form-control').val(' ');
                    $('.form-select').prop('selectedIndex', 0);
                }

              },
        });
    });

    function accredited(){
      $.ajax({
            type: 'POST',
            url: 'mas-tbl.php',
            success: function (output) {
                 $('.accredited-tbl').html(output)
              },
        });
    }
    accredited();

    $('#fns').on('input', function() {
        $(this).val(function(_, val) {
            return val.toUpperCase();
        });
    });

    $('#forgotFormID').submit(function(e){
           e.preventDefault();

           var forgotData = $(this).serialize();
           $.ajax({
               type: 'POST',
               url: '../controller/admin-forgotpassword.php',
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
               url: '../controller/admin-changepassword.php',
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

        $('.cardSend').click( function(e){
            e.preventDefault();

            var dataYr = $(this).data('yr');
            $.ajax({
                type: 'GET',
                url: 'email-table.php',
                data: { dataYr: dataYr },
                success: function (output) {
                    $('.messages').val(output);
                  },
            });
        });
        // function emailTable(){
        //   $.ajax({
        //         type: 'POST',
        //         url: 'email-table.php',
        //         success: function (output) {
        //              $('.email-table').html(output)
        //           },
        //     });
        // }
        // emailTable();
    
  });

  </script>
  
  
</body>
  
</html>