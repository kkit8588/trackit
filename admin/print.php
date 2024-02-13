<?php 
            include '../connect.php';
            $rand_num = $_GET['rand_num'];
            $select = mysqli_query($conn, "SELECT * FROM report_tbl WHERE rand_num = $rand_num ORDER BY id DESC");
            $row = $select->fetch_assoc() ;
            ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reports</title>
    <?php include 'header.php'; ?>
    <style>
    /*.ff-roman{
        font-family: "Times New Roman", Times, serif;
    }*/
    @media print {
        body{
            -webkit-print-color-adjust: exact;
        }
    }
    </style>
</head>
<body class="d-flex flex-column align-items-center" style="height: 100vh; padding-top: 30px; width: 100%;">
    <h5 class="fst-italic text-center pb-3">Personal Information</h5>
    <div class="d-flex justify-content-between mb-auto" style="width: 80%;" >
        <div >
            <div class="row m-0">
                <p class="p-0 fw-bold col">Email:</p>
                <span class="col-auto"><?php echo $row['email'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">School Year Graduated:</p>
                <span class="col-auto">
                <?php 
                    $select2 = mysqli_query($conn, "SELECT * FROM form_graduate WHERE rand_num = $rand_num ORDER BY id DESC");
                    while ($row2 = $select2->fetch_assoc()) {
                        echo'
                        <ul>
                        <li>'.$row2['syg'].'</li>
                        </ul>';
                    } ;
                    
                ?>
                
            </span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Full Name:</p>
                <span class="col-auto"><?php echo $row['fn'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Gender:</p>
                <span class="col-auto"><?php echo $row['gender'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Age:</p>
                <span class="col-auto"><?php echo $row['age'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Birthdate:</p>
                <span class="col-auto"><?php echo $row['birthdate'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Civil Status:</p>
                <span class="col-auto"><?php echo $row['civilstatus'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Course:</p>
                <span class="col-auto">

                <?php 
                    $select2 = mysqli_query($conn, "SELECT * FROM form_course WHERE rand_num = $rand_num ORDER BY id DESC");
                    while ($row2 = $select2->fetch_assoc()) {
                        echo'
                        <ul>
                        <li>'.$row2['course'].'</li>
                        </ul>';
                    } ;
                    
                ?>
                    
                </span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">National Certificate:</p>
                <span class="col-auto"><?php echo $row['birthdate'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Career After Graduation:</p>
                <span class="col-auto"><?php echo $row['cag'];?></span>
            </div>
            <?php if($row['employed'] == 'Yes'){?>
            <div class="row m-0">
                <p class="p-0 fw-bold col">If Higher Education (college) What Course:</p>
                <span class="col-auto"></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">If Enterpreneurship (started a business) What Business:</p>
                <span class="col-auto"><?php echo $row['q2'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">After graduation, what is your employment:</p>
                <span class="col-auto"><?php echo $row['q3'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">After graduation: Name of Company:</p>
                <span class="col-auto"><?php echo $row['q4'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Is your job related to your course:</p>
                <span class="col-auto"><?php echo $row['q5'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Where is your job located:</p>
                <span class="col-auto"><?php echo $row['q6'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">Number of months/yrs in work:</p>
                <span class="col-auto"><?php echo $row['created_yrs'];?></span>
            </div>
            <div class="row m-0">
                <p class="p-0 fw-bold col">What is your monthly income:</p>
                <span class="col-auto"><?php echo $row['q8'];?></span>
            </div>

            <?php }?>
        </div>
        <div class="mt-auto">
            <small>Prepared By:</small>
            <p class="pt-3">REN ANGLE QUINTO SOSA</p>
        </div>
    </div>
</body>
    <?php include 'footer.php' ;?>
    <script>
      window.print();  
      window.onafterprint = window.close; 
    </script>
</html>
