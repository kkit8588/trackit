<?php
include '../connect.php';
use PHPMailer\PHPMailer\PHPMailer;

require_once "../phpmailer/PHPMailer.php";
require_once "../phpmailer/SMTP.php";
require_once "../phpmailer/Exception.php";


$sendto = mysqli_real_escape_string($conn, $_POST['email']);
$sqlSelect = "SELECT * FROM admin_tbl WHERE email = '$sendto'";

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
      $mail->Subject = "Link to Change your Password";
      $mail->Body    = '
            <div style="text-align:center;font-size:24px;">
              Good day!<br><br>
              <div style="background-color:#D1E2C4;border-radius:20px;width:300px;margin:auto;color:#fff;font-size:24px;padding:20px 10px;">
                <a href="http://localhost/trackit/admin/changepassword.php?email='.$sendto.'">Click here to change your password</a>
              </div>
            </div>';

      if ($mail->send()) {
        $arrayHolder['status'] = 'Success';
      }
}else{
    $arrayHolder['status'] = 'Error';
}

echo json_encode($arrayHolder);

?>