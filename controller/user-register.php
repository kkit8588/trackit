<?php
include '../connect.php';
use PHPMailer\PHPMailer\PHPMailer;

require_once "../phpmailer/PHPMailer.php";
require_once "../phpmailer/SMTP.php";
require_once "../phpmailer/Exception.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$yg = mysqli_real_escape_string($conn, $_POST['yg']);
$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$sqlSelect = "SELECT * FROM student_list WHERE fullname = '$fullname'";
$selectQuery = mysqli_query($conn, $sqlSelect);

$arrayHolder = [];

if (mysqli_num_rows($selectQuery) > 0) {
    $query = "INSERT INTO user_tbl (fullname, email, username, password, yg) VALUES ('$fullname', '$email', '$username', '$password', '$yg')";

        if (mysqli_query($conn, $query)) {

            $sendto = mysqli_real_escape_string($conn, $_POST['email']);
            $sqlSelect = "SELECT * FROM user_tbl WHERE email = '$sendto'";

            $selectQuery = mysqli_query($conn, $sqlSelect);
            $arrayHolder = [];

            if (mysqli_num_rows($selectQuery) > 0) {

                  $mail = new PHPMailer();

                  $mail->isSMTP();
                  $mail->Host = "smtp.gmail.com";
                  $mail->SMTPAuth = true;
                  $mail->Username = "kkit8588@gmail.com";
                  $mail->Password = 'aiorrgpinpteusih';
                  $mail->Port = 587;
                  $mail->SMTPSecure = "tls";

                  $mail->isHTML(true);
                  $mail->setFrom('kkit8588@gmail.com', 'Trackit');     
                  $mail->addAddress($sendto);
                  $mail->Subject = "Registration Verification";
                  $mail->Body    = '
                        <div style="text-align:center;font-size:24px;">
                          Good day!<br><br>
                          <div style="background-color:#D1E2C4;border-radius:20px;width:300px;margin:auto;color:#fff;font-size:24px;padding:20px 10px;">
                            <a href="http://localhost/trackit/user/user-verify.php?email='.$sendto.'">Click here to verify your Registration.</a>
                          </div>
                        </div>';

                  if ($mail->send()) {
                    $arrayHolder['status'] = 'Success';
                  }
            }else{
                $arrayHolder['status'] = 'Error';
            }
        }

} else {
    $arrayHolder['status'] = 'Error';

}
echo json_encode($arrayHolder);
?>
