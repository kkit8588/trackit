
<table class="table table-responsive table-bordered text-center">
    <thead class="table-light ">
        <tr class="fw-bold">
            <td >Full Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../connect.php";
        if (isset($_GET['dataYr'])) {
            $dataYr = $_GET['dataYr'];
            $sqlSelect = mysqli_query($conn, "SELECT * FROM student_list WHERE created_yr = '$dataYr'");
            while($row = mysqli_fetch_assoc($sqlSelect)){ ?>

                <tr>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><button data-id='<?php echo $row['id']; ?>' data-yr='<?php echo $row['created_yr']; ?>' data-fn='<?php echo $row['fullname']; ?>' class="nameEdit btn btn-primary">Edit</button></td>
                </tr>
            <?php };?>
    <?php   }else{ ?>
                <tr>
                    <td colspan="2">No Data</td>
                </tr>
    <?php   } ?>
    </tbody>
</table>

 <!-- CARD MODAL -->
        <div class="modal fade" id="updateModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Student Name</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="updateList">
                        <div class="modal-body d-flex flex-column row-gap-2">
                            <input type="text" name="id" id="s-id" class="form-control" hidden>
                            <input type="text" name="yr" id="yr" class="form-control" hidden>
                            <div class="form-group">
                              <label class="form-label">Full Name:</label>
                              <input type="text" name="fn" id="fn" class="form-control" placeholder="full name">
                            </div>
                            <div class="form-group">
                              <label class="form-label">School Year:</label>
                              <input type="text" name="created_yr" id="created_yr" class="form-control" placeholder="full name">
                            </div>
                        </div>
                  
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>


<script type="text/javascript">
    

    $(document).ready(function() {

        $('.nameEdit').click(function(e) {
            // Prevent the default action of the click event (if any)
            e.preventDefault();
            $('#updateModal').modal('show');
            $('#s-id').val($(this).data('id'));
            $('#fn').val($(this).data('fn'));
            $('#created_yr').val($(this).data('yr'));
        });

        $('.updateList').submit(function(e) {
            e.preventDefault();

            var thisData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '../controller/update-student.php',
                data: thisData,
                success: function () {
                    Swal.fire({
                      title: "Done!",
                      text: "Add on About us Done!",
                      icon: "success"
                    });
                    var dataYr = $('#yr').val();
                        $.ajax({
                            type: 'GET',
                            url: 'input-table.php',
                            data: { dataYr: dataYr },
                            success: function (output) {
                                $('.studList').removeClass('d-none')
                                $('.studList').html(output)
                              },
                        });
                    $('#updateModal').modal('hide');
                  },
            });
        });


    });
</script>