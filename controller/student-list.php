<?php
include '../connect.php';

$fn = $_POST['fn'];
$sn = $_POST['sn'];
$email = $_POST['email'];
$created_yr = $_POST['created_yr'];
$array = [];


$Insert = mysqli_query($conn, "INSERT INTO student_list (fullname, student_no, email, created_yr) VALUES ('$fn', '$sn', '$email', '$created_yr')");

echo json_encode($array);

?>