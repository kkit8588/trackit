<?php 
    include '../connect.php';
    $id = 1;
    $select = mysqli_query($conn, "SELECT * FROM accredit_tbl ORDER BY id DESC");
    while ($row = $select->fetch_assoc()) {

    ?>
    <tr>
        <th  id="no"><?php echo $id++;?></th>
        <td><?php echo $row ['course'];?></td>
        <td><?php echo $row ['accredited'];?></td>
        <td><?php
            $description = $row['address'];
            $max_length = 50; // Change this to the desired maximum length
            if (strlen($description) > $max_length) {
                $description = substr($description, 0, $max_length) . '...';
            }
            echo $description;
            ?>
        </td>
        <td class="d-flex justify-content-center column-gap-2">
            <button data-bs-target="#accredited-modal" data-bs-toggle="modal"  class="btn btn-warning btn-sm editBtn"
                data-id="<?php echo $row ['id'];?>"
                data-course="<?php echo $row ['course'];?>"
                data-accredited="<?php echo $row ['accredited'];?>"
                data-address="<?php echo $row ['address'];?>"
                >Edit     
            </button>

            <form class="accrediteddelete">
                <input type="text" name="id" class="idValue" value="<?php echo $row['id']; ?>" hidden>
                <input type="submit" name="submit" class="deleteBtn btn btn-danger btn-sm" value="Delete">
            </form>
        </td>
        
    </tr>
<?php   }; ?>

<script>
    $(document).ready(function() {

        $('.editBtn').click(function() {
            $('#id').val($(this).data('id'));
           $('#course').val($(this).data('course'));
           $('#accredited').val($(this).data('accredited'));
           $('#address').val($(this).data('address'));
        });

        $('.accrediteddelete').submit(function (e) {
            e.preventDefault(); // Prevent the default form submission

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Assuming you have the item's ID stored in a variable named 'itemId'
                    var itemId = $(this).find('.idValue').val();

                    // Use AJAX to send a request to the server
                    $.ajax({
                        type: 'POST',
                        url: '../controller/accredit-delete.php',
                        data: { id: itemId },
                        success: function (response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your record has been deleted.",
                                icon: "success"
                            });
                            $.ajax({
                                type: 'POST',
                                url: 'mas-tbl.php',
                                success: function (output) {
                                    $('.accredited-tbl').html(output)
                                }
                            });
                        }
                    });
                }
            });
        });
        

    });
</script>