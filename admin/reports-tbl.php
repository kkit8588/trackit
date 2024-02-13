<table id="propertytable" class="table table-hover table-bordered" style="width:100%">
<thead class="table-light">
        <tr>
            <th hidden>id</th>
            <th>Names</th>
            <th>Course</th>
            <th>Status</th>
            <th>School Yr Grad.</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            include '../connect.php';
            
            $select = mysqli_query($conn, "SELECT * FROM report_tbl ORDER BY id DESC");
            while ($row = $select->fetch_assoc()) {

            ?>
            <tr>
                <td hidden><?php echo $row ['id'];?></td>
                <td><?php echo $row ['fn'];?></td>
                <td>
                    <ul>
                    <?php
                        $select3 = mysqli_query($conn, "SELECT * FROM form_course WHERE rand_num = '".$row['rand_num']."'");
                        while ($row3 = $select3->fetch_assoc()) {
                    ?>
                            <li><?php echo $row3['course'];?></li>
                    <?php } ?>
                    </ul>
                </td>
                <td><?php echo $row ['cag'];?></td>
                <td>
                    <ul>
                    <?php
                        $select2 = mysqli_query($conn, "SELECT * FROM form_graduate WHERE rand_num = '".$row['rand_num']."'");
                        while ($row2 = $select2->fetch_assoc()) {
                    ?>
                            <li><?php echo $row2['syg'];?></li>
                    <?php } ?>
                    </ul>
                </td>
                <td>
                    <!-- <a target="_blank" href="../form.php?id=<?php echo $row ['id']; ?>" class="btn btn-primary btn-sm px-3">Edit<i class="fa-regular fa-pen-to-square ms-1"></i></a > -->
                    <button class="btnShow btn btn-info btn-sm" data-bs-target="#showinfo" data-bs-toggle="modal"
                            data-email="<?php echo $row ['email'];?>"
                            data-syg="<?php echo $row ['syg'];?>"
                            data-fn="<?php echo $row ['fn'];?>"
                            data-gender="<?php echo $row ['gender'];?>"
                            data-age="<?php echo $row ['age'];?>"
                            data-birthdate="<?php echo $row ['birthdate'];?>"
                            data-civilstatus="<?php echo $row ['civilstatus'];?>"
                            data-course="<?php echo $row ['course'];?>"
                            data-cmnths="<?php echo $row ['created_mnth'];?>"
                            data-ncii="<?php echo $row ['ncii'];?>"
                            data-cag="<?php echo $row ['cag'];?>"
                            data-q1="<?php echo $row ['q1'];?>"
                            data-q2="<?php echo $row ['q2'];?>"
                            data-q3="<?php echo $row ['q3'];?>"
                            data-q4="<?php echo $row ['q4'];?>"
                            data-q5="<?php echo $row ['q5'];?>"
                            data-q6="<?php echo $row ['q6'];?>"
                            data-cyrs="<?php echo $row ['created_yrs'];?>"
                            data-q8="<?php echo $row ['q8'];?>"

                    ><i class="fa-regular fa-eye"></i> Show</button>
                    <a href="print.php?rand_num=<?php echo $row ['rand_num'];?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-print"></i> Print</a>
                </td>
            </tr>
        <?php   }; ?>
    </tbody>
</table>

<script>
    $('#propertytable').DataTable({
         "order": [[0, 'desc']],
          "ordering": false
    });

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
            $('#nciitxt').text($(this).data('ncii'));
            $('#cagtxt').text($(this).data('cag'));
            $('#q1txt').text($(this).data('q1'));
            $('#q2txt').text($(this).data('q2'));
            $('#q3txt').text($(this).data('q3'));
            $('#q4txt').text($(this).data('q4'));
            $('#q5txt').text($(this).data('q5'));
            $('#q6txt').text($(this).data('q6'));
            $('#cmnthstxt').text($(this).data('cmnths'));
            $('#cyrstxt').text($(this).data('cyrs'));
            $('#q8txt').text($(this).data('q8'));
        });
    });
</script>