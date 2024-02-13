<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "./phpmailer/PHPMailer.php";
require_once "./phpmailer/SMTP.php";
require_once "./phpmailer/Exception.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emails = $_POST["emails"];

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

    $recipientArray = explode(",", $emails);

    foreach ($recipientArray as $sendto) {
        $mail->clearAddresses(); // Clear any previous recipients
        $mail->addAddress(trim($sendto));
        $mail->Subject = "Subject Here";
        $mail->Body = 'Your email content goes here. You can use HTML, as shown in the previous examples.';

        if ($mail->send()) {
            $status[] = 'Email sent successfully to ' . $sendto;
        } else {
            $status[] = 'Error sending email to ' . $sendto . ': ' . $mail->ErrorInfo;
        }
    }

    // Output status
    echo implode("<br>", $status);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Email Form</title>
</head>
<body>
    <h2>Send Bulk Email</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="emails">Emails (comma-separated):</label>
        <input type="text" id="emails" name="emails" required>
        <br>
        <input type="submit" value="Send Emails">
    </form>
</body>
</html>
