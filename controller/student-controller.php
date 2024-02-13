<?php
include '../connect.php';

$select2 = mysqli_query($conn, "SELECT * FROM student_list ORDER BY created_yr DESC");
$row2 = mysqli_fetch_assoc($select2); // Fix here, use mysqli_fetch_assoc
$arrayHolder = [];

if (isset($_POST['students']) && $_POST['students'] == 'graduates') {
    $student_num = $_POST['student_num'];
    $school_yr = $_POST['school_yr'];
    if ($school_yr <= $row2['created_yr']){
        // Use prepared statement to prevent SQL injection
        $sqlInsert = mysqli_prepare($conn, "INSERT INTO graduates_tbl (student_num, school_yr) VALUES (?, ?)");
        mysqli_stmt_bind_param($sqlInsert, "ss", $student_num, $school_yr);
        $result = mysqli_stmt_execute($sqlInsert);

        if ($result) {
            $arrayHolder['status'] = 'graduates';
        } else {
            $arrayHolder['status'] = 'error';
        }
    } else {
        $arrayHolder['status'] = 'error';
    }
} else if (isset($_POST['students']) && $_POST['students'] == 'enrolled') {
    $student_num2 = $_POST['student_num2'];
    $school_yr2 = $_POST['school_yr2'];
    if ($school_yr2 <= $row2['created_yr']){
        // Use prepared statement to prevent SQL injection
        $sqlInsert = mysqli_prepare($conn, "INSERT INTO enrolled_tbl (student_num2, school_yr2) VALUES (?, ?)");
        mysqli_stmt_bind_param($sqlInsert, "ss", $student_num2, $school_yr2);
        $result = mysqli_stmt_execute($sqlInsert);

        if ($result) {
            $arrayHolder['status'] = 'enrolled';
        } else {
            $arrayHolder['status'] = 'error';
        }
    } else {
        $arrayHolder['status'] = 'error';
    }
}

echo json_encode($arrayHolder);
?>
