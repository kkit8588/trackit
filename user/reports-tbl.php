<?php 
    include '../connect.php';
    
    $select = mysqli_query($conn, "SELECT * FROM report_tbl ORDER BY id DESC");
    while ($row = $select->fetch_assoc()) {

    ?>
    <tr>
        <td><?php echo $row ['fn'];?></td>
        <td <?php if($row ['status'] == 'PASSED') echo "class='text-bg-success fw-bold'>"; {echo $row ['status']; }?></td>
        <td <?php if($row ['status'] == 'FAILED') echo "class='text-bg-danger fw-bold'>"; {echo $row ['status']; }?></td>
        <td><?php echo $row ['course'];?></td>
        <td><?php echo $row ['cag'];?></td>
        <td><?php echo $row ['syg'];?></td>
        <td>
            <a target="_blank" href="../form.php?id=<?php echo $row ['id']; ?>" class="btn btn-primary btn-sm px-3">Edit<i class="fa-regular fa-pen-to-square ms-1"></i></a >
            <button class="btnShow btn btn-info btn-sm" data-bs-target="#showinfo" data-bs-toggle="modal"
                    data-email="<?php echo $row ['email'];?>"
                    data-syg="<?php echo $row ['syg'];?>"
                    data-fn="<?php echo $row ['fn'];?>"
                    data-gender="<?php echo $row ['gender'];?>"
                    data-age="<?php echo $row ['age'];?>"
                    data-birthdate="<?php echo $row ['birthdate'];?>"
                    data-civilstatus="<?php echo $row ['civilstatus'];?>"
                    data-course="<?php echo $row ['course'];?>"
                    data-status="<?php echo $row ['status'];?>"
                    data-ncii="<?php echo $row ['ncii'];?>"
                    data-cag="<?php echo $row ['cag'];?>"
                    data-q1="<?php echo $row ['q1'];?>"
                    data-q2="<?php echo $row ['q2'];?>"
                    data-q3="<?php echo $row ['q3'];?>"
                    data-q4="<?php echo $row ['q4'];?>"
                    data-q5="<?php echo $row ['q5'];?>"
                    data-q6="<?php echo $row ['q6'];?>"
                    data-q7="<?php echo $row ['q7'];?>"
                    data-q8="<?php echo $row ['q8'];?>"

            >Show<i class="fa-regular fa-eye ms-1"></i></button>
        </td>
    </tr>
<?php   }; ?>
<script>
    $(document).ready(function() {
        $('.btnShow').click(function() {
            $('#emailtxt').text($(this).data('email'));
            $('#sygtxt').text($(this).data('syg'));
            $('#fntxt').text($(this).data('fn'));
            $('#gendertxt').text($(this).data('gender'));
            $('#agetxt').text($(this).data('age'));
            $('#birthdatetxt').text($(this).data('birthdate'));
            $('#civilstatustxt').text($(this).data('civilstatus'));
            $('#coursetxt').text($(this).data('course'));
            $('#statustxt').text($(this).data('status'));
            $('#nciitxt').text($(this).data('ncii'));
            $('#cagtxt').text($(this).data('cag'));
            $('#q1txt').text($(this).data('q1'));
            $('#q2txt').text($(this).data('q2'));
            $('#q3txt').text($(this).data('q3'));
            $('#q4txt').text($(this).data('q4'));
            $('#q5txt').text($(this).data('q5'));
            $('#q6txt').text($(this).data('q6'));
            $('#q7txt').text($(this).data('q7'));
            $('#q8txt').text($(this).data('q8'));
        });
    });
</script>