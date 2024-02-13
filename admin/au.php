<?php

include "../connect.php";
$sqlSelect = mysqli_query($conn, "SELECT * FROM about_us");
while($row = mysqli_fetch_assoc($sqlSelect)){
?>

<div class="card" style="height:10rem;width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-primary-emphasis">
      <?php $tittle = $row['tittle'];
      $max_length = 25;
      if (strlen($tittle) > $max_length) {
          $tittle = substr($tittle, 0, $max_length) . '...';
      }
      echo $tittle;
      ?>
    </h5>
    <p class="card-text">
        <?php $content = $row['content'];
          $max_length = 30;
          if (strlen($content) > $max_length) {
              $content = substr($content, 0, $max_length) . '...';
          }
          echo $content;
        ?>
      </p>
    <a href="#cardModal" data-bs-toggle="modal" class="card-link cardEdit"
        data-id="<?php echo $row ['id'];?>"
        data-tittle="<?php echo $row ['tittle'];?>"
        data-content="<?php echo $row ['content'];?>"
    >Edit</a>
    <form class="audeleteForm float-end">
        <input type="text" name="id" class="idValue" value="<?php echo $row['id']; ?>" hidden>
        <input type="submit" name="submit" class="deleteBtn btn btn-danger btn-sm" value="Delete">
    </form>


  </div>
</div>

<?php };?>

<div type="button" data-bs-target="#cardModal" data-bs-toggle="modal"  class="card cardBTN" style="height:10rem; width: 18rem; border: 2px dashed rgb(171, 202, 255);">
  <div class="card-body d-flex flex-column row-gap-1 align-items-center justify-content-center">
    <i class="fa-solid fa-plus fs-1" style="color: rgb(63, 134, 255);"></i>
    <h5 class="card-subtitle text-body-secondary">Add on about us</h5>
  </div>
</div>

<script>
    $(document).ready(function() {

        $('.cardEdit').click(function() {
           $('#id').val($(this).data('id'));
           $('#Tittle').val($(this).data('tittle'));
           $('#content').val($(this).data('content'));
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
                    url: '../controller/delete-au.php',
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
                            url: 'au.php',
                            success: function (output) {
                                $('.au').html(output);
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