<?php
include '../connect.php';

$id = $_POST['id'];
$fn = $_POST['fn'];
$created_yr = $_POST['created_yr'];

$sqlInsert = mysqli_query($conn, "UPDATE student_list SET fullname='$fn', created_yr='$created_yr' WHERE id='$id' ");
?>