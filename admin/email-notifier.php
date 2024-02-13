<?php
include "../connect.php";
use PHPMailer\PHPMailer\PHPMailer;

require_once "../phpmailer/PHPMailer.php";
require_once "../phpmailer/SMTP.php";
require_once "../phpmailer/Exception.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emails = $_POST["emails"];
    $messages = $_POST["messages"];

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
        $mail->Subject = "Trackit Form";
         $emailLists = rtrim($sendto, ',');
        // Include email address in the link without comma
        $mail->Body = 'Good Day! <a href="' . htmlspecialchars($messages) . '?email=' . $emailLists . '">This is the link to the Form</a>';
        
        $mail->send();
    }
    echo "<script>alert('Email sent successfully')</script>";
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Notifier</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pt-4 pe-lg-5">
        <h4 class="my-1">Email Notifier</h4>
        <div class="p-2 mt-4">
            <div class="row">
                <div class="col row m-0 gap-1">
                    <?php
                        $sqlSelects = mysqli_query($conn, "SELECT * FROM user_tbl GROUP BY yg");
                        while($rows = mysqli_fetch_assoc($sqlSelects)){
                          
                        ?>

                        <div class="card" style="height:10rem;width: 18rem;">
                          <div class="card-body d-flex flex-column">
                            <h1 class="card-title text-primary-emphasis mb-auto">
                              <?php echo $rows['yg']; ?>
                            </h1>
                            <div>
                                <a role="button" class="card-link cardSend"
                                    data-yr="<?php echo $rows['yg'];?>"

                                >Send Messages</a>
                            </div>


                          </div>
                        </div>
                        <?php } ?>

                </div>
                <div class="col-12 d-flex flex-column align-items-center p-5">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="col-6 d-flex flex-column row-gap-2 shadow p-5">
                        <h5>Send Messages</h5>
                        <div class="form-group">
                            <label class="form-label">Messages:</label>
                            <input type="text" name="messages" class="form-control" placeholder="Type your messages" value="http://localhost/trackit/form.php">
                        </div>
                        <div class="form-group">
                           

                            <label class="form-label">Email List:</label>
                            <textarea type="text" name="emails" class="form-control messages" placeholder="Type school year"></textarea>
                        </div>
                        <div class="form-group ms-auto">
                            <input type="submit" name="save" value="Send" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
    <?php include 'footer.php' ;?>
</html>
