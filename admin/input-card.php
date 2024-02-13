<?php

include "../connect.php";
$sqlSelect = mysqli_query($conn, "SELECT * FROM student_list GROUP BY created_yr");
while($row = mysqli_fetch_assoc($sqlSelect)){
?>

<div class="card" style="height:10rem;width: 18rem;">
  <div class="card-body d-flex flex-column">
    <h1 class="card-title text-primary-emphasis mb-auto">
      <?php echo $row['created_yr']; ?>
    </h1>
    <div>
        <a role="button" class="card-link studCard"
            data-yr="<?php echo $row ['created_yr'];?>"
        >Edit</a>
    </div>


  </div>
</div>

<?php };?>

<div type="button" data-bs-target="#newStudModal" data-bs-toggle="modal"  class="card cardBTN" style="height:10rem; width: 18rem; border: 2px dashed rgb(171, 202, 255);">
  <div class="card-body d-flex flex-column row-gap-1 align-items-center justify-content-center">
    <i class="fa-solid fa-plus fs-1" style="color: rgb(63, 134, 255);"></i>
    <h5 class="card-subtitle text-body-secondary">Add List</h5>
  </div>
</div>

<script>
    $(document).ready(function() {

        $('.cardEdit').click(function() {
           $('#id').val($(this).data('id'));
           $('#Tittle').val($(this).data('tittle'));
           $('#content').val($(this).data('content'));
        });

        $('.studCard').click( function(e){
            e.preventDefault();

            var dataYr = $(this).data('yr');
            $.ajax({
                type: 'GET',
                url: 'input-table.php',
                data: { dataYr: dataYr },
                success: function (output) {
                    $('.studList').removeClass('d-none')
                    $('.studList').html(output)
                  },
            });
        });
});


</script>