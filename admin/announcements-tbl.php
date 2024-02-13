<?php 
    include '../connect.php';
    $id = 1;
    $select = mysqli_query($conn, "SELECT * FROM announcement ORDER BY id DESC");
    while ($row = $select->fetch_assoc()) {

    ?>
    <tr>
        <th  id="no"><?php echo $id++;?></th>
        <td><?php echo $row ['what_ancmt'];?></td>
        <td><?php echo $row ['when_ancmt'];?></td>
        <td><?php echo $row ['where_ancmt'];?></td>
        <td><?php
            $description = $row['description'];
            $max_length = 50; // Change this to the desired maximum length
            if (strlen($description) > $max_length) {
                $description = substr($description, 0, $max_length) . '...';
            }
            echo $description;
            ?>
        </td>
        <td class="d-flex justify-content-center column-gap-2">
            <button data-bs-target="#announce-modal" data-bs-toggle="modal"  class="btn btn-warning btn-sm editBtn"
                data-id="<?php echo $row ['id'];?>"
                data-what="<?php echo $row ['what_ancmt'];?>"
                data-when="<?php echo $row ['when_ancmt'];?>"
                data-where="<?php echo $row ['where_ancmt'];?>"
                data-description="<?php echo $row ['description'];?>"
                >Edit     
            </button>

            <form class="audeleteForm">
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
           $('#what_ancmt').val($(this).data('what'));
           $('#when_ancmt').val($(this).data('when'));
           $('#where_ancmt').val($(this).data('where'));
           $('#description').val($(this).data('description'));
        });

        $('.audeleteForm').submit(function (e) {
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
                        url: '../controller/delete-controller.php',
                        data: { id: itemId },
                        success: function (response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your record has been deleted.",
                                icon: "success"
                            });

                            // Move this outside of the Swal.fire block
                            $.ajax({
                                type: 'POST',
                                url: 'announcements-tbl.php',
                                success: function (output) {
                                    $('.announcement-tbl').html(output);
                                },
                                error: function (error) {
                                    console.error('Error:', error);
                                }
                            });
                        },
                        error: function (error) {
                            console.error('Error:', error);
                        }
                    });
                }
            });
        });

    });
</script>