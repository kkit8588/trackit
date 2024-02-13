<?php
include '../connect.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sqlUpdate = "UPDATE user_tbl SET password = '$password' WHERE email = '$email'";
$updateQuery = mysqli_query($conn, $sqlUpdate);

$response = array();

if ($updateQuery) {
    $response['status'] = 'Success';
} else {
    $response['status'] = 'Error';
    $response['error'] = mysqli_error($conn);
}

echo json_encode($response);
?>
