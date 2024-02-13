<?php
include '../connect.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$course = mysqli_real_escape_string($conn, $_POST['course']);
$yg = mysqli_real_escape_string($conn, $_POST['yg']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$req_num = random_int(10000, 99999);

$arrayHolder = [];

// Insert data into req_tbl using a prepared statement
$stmt1 = $conn->prepare("INSERT INTO req_tbl (name, course, yg, email, req_num) VALUES (?, ?, ?, ?, ?)");
$stmt1->bind_param("sssss", $name, $course, $yg, $email, $req_num);

if ($stmt1->execute()) {
    if (isset($_POST['rn'])) {
        $rn = $_POST['rn'];
        
        // Prepare the statement for the second insert query outside the loop
        $stmt2 = $conn->prepare("INSERT INTO req_name (rn, req_num) VALUES (?, ?)");
        $stmt2->bind_param("ss", $rns, $req_num);

        foreach ($rn as $rns) {
            // Bind parameters and execute the second insert query inside the loop
            if ($stmt2->execute()) {
                $arrayHolder['status'] = "insert";
            } else {
                $arrayHolder['status'] = "error";
                $arrayHolder['error'] = $stmt2->error;
                break; // Stop the loop on the first error
            }
        }
        
        // Close the second statement outside the loop
        $stmt2->close();
    }
} else {
    $arrayHolder['status'] = "error";
    $arrayHolder['error'] = $stmt1->error;
}

// Close the first statement
$stmt1->close();

echo json_encode($arrayHolder);
?>
