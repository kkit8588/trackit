<?php
include '../connect.php';

$id = $_POST['id'];
$description = $_POST['description'];
$what_ancmt = $_POST['what_ancmt'];
$where_ancmt = $_POST['where_ancmt'];
$when_ancmt = $_POST['when_ancmt'];


if ($id == " ") {
	$sqlInsert = mysqli_query($conn, "INSERT INTO announcement (description, what_ancmt, where_ancmt, when_ancmt) VALUES ('$description', '$what_ancmt', '$where_ancmt', '$when_ancmt')");
}else{
	$sqlInsert = mysqli_query($conn, "UPDATE announcement SET description='$description', what_ancmt='$what_ancmt', where_ancmt='$where_ancmt', when_ancmt='$when_ancmt' WHERE id='$id' ");
}
?>