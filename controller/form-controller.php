<?php
include '../connect.php';

$id = $_POST['id'];
$email = mysqli_real_escape_string($conn, $_POST['email']);
$fn = mysqli_real_escape_string($conn, $_POST['fn']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
$civilstatus = mysqli_real_escape_string($conn, $_POST['civilstatus']);
$employed = mysqli_real_escape_string($conn, $_POST['employed']);
$dcrptn = mysqli_real_escape_string($conn, $_POST['dcrptn']);
$q1 = mysqli_real_escape_string($conn, $_POST['q1']);
$q2 = mysqli_real_escape_string($conn, $_POST['q2']);
$q4 = mysqli_real_escape_string($conn, $_POST['q4']);
$q5 = mysqli_real_escape_string($conn, $_POST['q5']);
$q6 = mysqli_real_escape_string($conn, $_POST['q6']);
$created_yrs = mysqli_real_escape_string($conn, $_POST['created_yrs']);
$created_mnth = mysqli_real_escape_string($conn, $_POST['created_mnth']);
$q8 = mysqli_real_escape_string($conn, $_POST['q8']);

$q3 = isset($_POST['q3']) ? mysqli_real_escape_string($conn, $_POST['q3']) : 'none';
$ncii = isset($_POST['ncii']) ? mysqli_real_escape_string($conn, $_POST['ncii']) : 'none';
$cag = isset($_POST['cag']) ? mysqli_real_escape_string($conn, $_POST['cag']) : 'none';

$rand_num = random_int(10000, 99999);
$array = [];
$sql2 = "INSERT INTO report_tbl (email, fn, gender, age, birthdate, civilstatus, ncii, cag, q1, q2, q3, q4, q5, q6, created_yrs, created_mnth, q8, employed, dcrptn, rand_num) 
            VALUES ('$email', '$fn', '$gender', '$age', '$birthdate', '$civilstatus', '$ncii', '$cag', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$created_yrs', '$created_mnth', '$q8', '$employed', '$dcrptn', '$rand_num')";
$res2 = $conn->query($sql2);

if ($res2) {
    if (isset($_POST['syg'])) {
        $syg = $_POST['syg'];
        foreach ($syg as $sygs) {
            $sql3 = "INSERT INTO form_graduate (syg, rand_num) 
                    VALUES ('$sygs', '$rand_num')";
            $res3 = $conn->query($sql3);
        }
    }

    if (isset($_POST['course'])) {
        $course = $_POST['course'];
        foreach ($course as $courses) {
            $sql4 = "INSERT INTO form_course (course, rand_num) 
                    VALUES ('$courses', '$rand_num')";
            $res4 = $conn->query($sql4);
        }
    }
    $array['status'] = 'INSERT';

}else{
    $array['status'] = 'INSERT';
}

echo json_encode($array);
?>
