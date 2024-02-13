
<?php 
include '../connect.php';
session_start();

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];
$arraHolder =[];

$select = "SELECT * FROM user_tbl WHERE email = '$email'";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['fullname'] = $row['fullname'];

    // Check if the password is correct
    if (password_verify($password, $row['password'])){
      if ($row['status'] == 'registered') {
        $arraHolder['status'] = 'success';
      }else{
        $arraHolder['status'] = 'error';
        $arraHolder['message'] = 'Click verify link on your email!';
      }
    }else {
      $arraHolder['status'] = 'error';
      $arraHolder['message'] = 'Your password is wrong!';
   }
}else{
  $arraHolder['status'] = 'error';
  $arraHolder['message'] = 'Please check your email!';
}

echo json_encode($arraHolder);

?>




