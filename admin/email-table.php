<?php

include "../connect.php";

$dataYr = mysqli_real_escape_string($conn, $_GET['dataYr']);
$sqlSelect = mysqli_prepare($conn, "SELECT * FROM user_tbl WHERE yg = ?");
mysqli_stmt_bind_param($sqlSelect, "s", $dataYr);
mysqli_stmt_execute($sqlSelect);
$result = mysqli_stmt_get_result($sqlSelect);

$emails = array(); // Initialize an array to store email addresses

while ($row = mysqli_fetch_assoc($result)) {
    $emailList = $row['email'] . ',';
    $emailrtrim = rtrim($emailList, ',');
    $emailexplode = explode(',', $emailrtrim);

    // Add email addresses to the array
    $emails = array_merge($emails, $emailexplode);
}

// Display as comma-separated string without the last comma
echo implode(',', $emails);

mysqli_stmt_close($sqlSelect);
?>
