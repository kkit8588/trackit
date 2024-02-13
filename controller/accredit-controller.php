<?php
include '../connect.php';

$id = $_POST['id'];
$course = mysqli_real_escape_string($conn, $_POST['course']);
$accredited = mysqli_real_escape_string($conn, $_POST['accredited']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$arrayHolder = [];
if ($id == " ") {
	$sqlInsert = mysqli_query($conn, "INSERT INTO accredit_tbl (course, accredited, address) VALUES ('$course', '$accredited', '$address')");
	$arrayHolder['status'] = "insert";
}else{
	$sqlInsert = mysqli_query($conn, "UPDATE accredit_tbl SET course='$course', accredited='$accredited', address='$address' WHERE id='$id' ");
	$arrayHolder['status'] = "update";
}
echo json_encode($arrayHolder);
?>